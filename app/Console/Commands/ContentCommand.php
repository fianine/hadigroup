<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Header;
use App\Socmed;

class ContentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addContent {jeniscontent} {email_or_image} {instagram} {facebook}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat content dummy';

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
        if($this->argument('jeniscontent') == 'header'){
          $content = Header::create([
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'image' => $this->argument('email_or_image')
          ]);
        }else{
          $content = Socmed::create([
            'email' => $this->argument('email_or_image'),
            'instagram' => $this->argument('instagram'),
            'facebook' => $this->argument('facebook')
          ]);
        }

        $this->info('Dummy content success to add database');
    }
}
