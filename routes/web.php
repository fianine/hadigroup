<?php

// Auth
Route::group(['before' =>  'auth'], function(){
  Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login');
  Route::match(['get', 'post'], 'login', 'Auth\LoginController@login');
  Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

// Admin
Route::group(['middleware' => ['auth', 'role:admin']], function(){
  // Dashboard
  Route::get('admin/dashboard', 'Admin\DashboardController@index');

  // Content
  Route::match(['get','post'],'admin/content/header/{id}', 'Admin\ContentController@index');
  Route::match(['get','post'], 'admin/content/update/{id}', 'Admin\ContentController@update');

  // Social-media
  Route::match(['get','post'],'admin/content/sosmed/{id}', 'Admin\SosmedController@index');
  Route::match(['get','post'], 'admin/content/updatesosmed/{id}', 'Admin\SosmedController@update');

  // About
  Route::match(['get','post'],'admin/about', 'Admin\AboutController@index_about');

  Route::get('admin/about/mission', 'Admin\AboutController@index_mission');
  Route::match(['get','post'], 'admin/about/mission/add', 'Admin\AboutController@add_mission');
  Route::match(['get','post'], 'admin/about/mission/edit/{id}', 'Admin\AboutController@edit_mission');
  Route::delete('admin/about/mission/delete/{id}', 'Admin\AboutController@delete_mission');

  // Company
  Route::get('admin/company', 'Admin\CompanyController@index');
  Route::match(['get','post'], 'admin/company/add', 'Admin\CompanyController@add');
  Route::match(['get','post'], 'admin/company/edit/{id}', 'Admin\CompanyController@edit');
  Route::delete('admin/company/delete/{id}', 'Admin\CompanyController@delete');

  //Blog
  Route::get('admin/blog', 'Admin\BlogController@index');
  Route::match(['get','post'], 'admin/blog/formadd', 'Admin\BlogController@formadd');
  Route::match(['get','post'], 'admin/blog/add', 'Admin\BlogController@add');
  Route::match(['get','post'], 'admin/blog/edit/{id}', 'Admin\BlogController@edit');
  Route::match(['get','post'], 'admin/blog/update/{id}', 'Admin\BlogController@update');
  Route::delete('admin/blog/delete/{id}', 'Admin\BlogController@delete');

  //Mailbox
  Route::get('admin/mail', 'Admin\MailController@index');
  Route::match(['get','post'], 'admin/mail/see/{id}', 'Admin\MailController@see');
  Route::delete('admin/mail/delete/{id}', 'Admin\MailController@delete');
});

// Pages
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('company', 'PagesController@company');
Route::get('blog', 'PagesController@blog');
Route::get('detail/{id}', 'PagesController@blog_detail');
Route::get('contact', 'PagesController@contact');
Route::match(['get','post'], 'contact_submit', 'PagesController@contact_submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
