<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller {

  public function index() {
    return view('page/index');
  }

  public function about() {
    return view('page/about');
  }

  public function company() {
    return view('page/company');
  }

  public function blog() {
    return view('page/blog');
  }

  public function blog_detail() {
    return view('page/blogDetail');
  }

  public function contact() {
    return view('page/contact');
  }
}

?>
