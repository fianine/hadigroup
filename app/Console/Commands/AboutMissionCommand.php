<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\AboutMission;

class AboutMissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addAboutMission {about_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menambahkan dummy data about mission';

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
      $mission = AboutMission::create([
        'about_id' => $this->argument('about_id'),
        'mission' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
      ]);

      $this->info('Add dummy successfully');
    }
}
