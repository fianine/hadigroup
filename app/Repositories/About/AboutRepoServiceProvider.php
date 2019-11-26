<?php

namespace App\Repositories\About;
use Illuminate\Support\ServiceProvider;

class AboutRepoServiceProvider extends ServiceProvider{
    public function boot(){
      //code here
    }

    public function register(){
        $this->app->bind('App\Repositories\About\AboutInterface',
        'App\Repositories\About\AboutRepository');
    }
}
