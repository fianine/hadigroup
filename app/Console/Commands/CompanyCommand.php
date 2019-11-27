<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Company;

class CompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'addCompany';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat dummy company';

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
        $company = Company::create([
          'company_name' => 'Hamura Agency',
          'desc' => 'Lorem ipsum',
          'company_logo' => 'Lorem ipsum',
          'company_web_image' => 'Lorem ipsum',
          'company_link' => 'https://hamura.co'
        ]);
        $this->info('Successfully');
    }
}
