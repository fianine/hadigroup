<?php

namespace App\Repositories\Content;
use Illuminate\Support\ServiceProvider;

class ContentRepoServiceProvider extends ServiceProvider{
    public function boot(){
      //code here
    }

    public function register(){
        $this->app->bind('App\Repositories\Content\ContentInterface',
        'App\Repositories\Content\ContentRepository');
    }
}
