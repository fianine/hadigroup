<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'adduser {namadepan} {namabelakang} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat user baru';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $userRole = config('roles.models.role')::where('name', '=', 'User')->first();

      if (config('roles.models.defaultUser')::where('email', '=', $this->argument('email'))->first() === null) {
          $newUser = config('roles.models.defaultUser')::create([
              'name'     => $this->argument('namadepan').' '.$this->argument('namabelakang'),
              'email'    => $this->argument('email'),
              'password' => bcrypt($this->argument('password')),
          ]);

          $newUser;
          $newUser->attachRole($userRole);
      }

      $this->info('Success');
    }
}
