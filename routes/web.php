<?php

// Auth
Route::group(['before' =>  'auth'], function(){
  Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::match(['get', 'post'], 'login', 'Auth\LoginController@login');
  Route::post('logout', 'Auth\LoginController@logout')->name('logout');
});

// Admin
Route::group(['middleware' => ['auth', 'role:admin']], function(){
  // Dashboard
  Route::get('admin/dashboard', 'Admin\DashboardController@index');

  // Content
  Route::match(['get','post'],'admin/content/header', 'Admin\ContentController@add_header');
});

// Pages
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('company', 'PagesController@company');
Route::get('blog', 'PagesController@blog');
Route::get('detail', 'PagesController@blog_detail');
Route::get('contact', 'PagesController@contact');
