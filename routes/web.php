<?php

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('company', 'PagesController@company');
Route::get('blog', 'PagesController@blog');
Route::get('detail', 'PagesController@blog_detail');
