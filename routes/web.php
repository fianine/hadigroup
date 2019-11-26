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
  Route::match(['get','post'],'admin/content/social-media', 'Admin\ContentController@add_socmed');

  // About
  Route::match(['get','post'],'admin/about', 'Admin\AboutController@index_about');

  Route::get('admin/about/mission', 'Admin\AboutController@index_mission');
  Route::match(['get','post'], 'admin/about/mission/add', 'Admin\AboutController@add_mission');
  Route::match(['get','post'], 'admin/about/mission/edit/{id}', 'Admin\AboutController@edit_mission');
  Route::delete('admin/about/mission/delete/{id}', 'Admin\AboutController@delete_mission');
});

// Pages
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('company', 'PagesController@company');
Route::get('blog', 'PagesController@blog');
Route::get('detail', 'PagesController@blog_detail');
Route::get('contact', 'PagesController@contact');
