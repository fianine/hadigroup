<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Blog;
use App\Content_header;
use App\About;
use App\AboutMission;
use App\Company;
use App\Mailbox;
use Auth;
use Redirect;

class PagesController extends Controller {

  public function index() {
    $content_header=Content_header::find(1);
    $about=About::find(1);
    $blog=Blog::orderBy('id', 'DESC')->limit(4)->get();
    $company=Company::get();
    return view('page/index', compact('content_header', 'about', 'blog', 'company'));
  }

  public function about() {
    $about=About::find(1);
    $about_mission=AboutMission::get();
    $company=Company::get();
    return view('page/about', compact('about','about_mission','company'));
  }
  public function contact_submit(Request $request) {
      $this->validate($request, [
        'name' => 'required',
      ]);
      $contact= new Mailbox;
      $contact->name=$request->name;
      $contact->email=$request->email;
      $contact->phone=$request->phone;
      $contact->subject=$request->subject;
      $contact->message=$request->message;
      $contact->save();
        return Redirect::back();
  }

  public function company() {
    return view('page/company');
  }

  public function blog() {
    $blog = Blog::paginate(9);
    return view('page/blog', compact('blog'));
  }

  public function blog_detail(Request $request, $id) {
    $id_data = Crypt::decryptString($id);
    $blog = Blog::find($id_data);
    $blogdata = Blog::paginate(4);
    return view('page/blogDetail', compact('blog','blogdata'));
  }

  public function contact() {
    return view('page/contact');
  }
}

?>
