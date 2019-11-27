<?php

namespace App\Repositories\Company;
use Illuminate\Support\ServiceProvider;

class CompanyRepoServiceProvider extends ServiceProvider{
    public function boot(){
      //code here
    }

    public function register(){
        $this->app->bind('App\Repositories\Company\CompanyInterface',
        'App\Repositories\Company\CompanyRepository');
    }
}
