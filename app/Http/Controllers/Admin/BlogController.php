<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogController extends Controller
{

  public function index()
  {
    $blog = Blog::get();
    return view('admin/blog/index', compact('blog'));
  }

  public function add(Request $request)
  {
    $this->validate($request, [
      'title' => 'required',
      'content' => 'required',
      'tags' => 'required',
      'file_logo_blog' => 'required',
    ]);
    $file = $request->file('file_logo_blog');
    echo 'File Name: '.$file->getClientOriginalName();
    echo '<br>';
    echo 'File Extension: '.$file->getClientOriginalExtension();
    echo '<br>';
    echo 'File Real Path: '.$file->getRealPath();
    echo '<br>';
    echo 'File Size: '.$file->getSize();
    echo '<br>';
    echo 'File Mime Type: '.$file->getMimeType();
    $tujuan_upload = 'upload/blog';
    $name_file=$file->getClientOriginalName();
    $file->move($tujuan_upload,$name_file);

    $blog= new Blog;
    $blog->title=$request->title;
    $blog->content=$request->content;
    $blog->user_id=Auth::user()->id;
    $blog->image=$name_file;
    $blog->tags=$request->tags;
    $blog->save();
      return redirect('admin/blog');
  }
  public function formadd()
  {
    return view('admin/blog/add');
  }

  public function edit(Request $request, $id)
  {
    $blog = Blog::find($id);
    return view('admin/blog/edit', compact('blog'));
  }
  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'title' => 'required',
      'content' => 'required',
      'file_logo_blog' => 'required',
      'tags' => 'required',
    ]);
    $file = $request->file('file_logo_blog');
    echo 'File Name: '.$file->getClientOriginalName();
    echo '<br>';
    echo 'File Extension: '.$file->getClientOriginalExtension();
    echo '<br>';
    echo 'File Real Path: '.$file->getRealPath();
    echo '<br>';
    echo 'File Size: '.$file->getSize();
    echo '<br>';
    echo 'File Mime Type: '.$file->getMimeType();
    $blog = Blog::find($id);
    if ($request->file_logo_blog) {
      $file_logo_blog=$request->file('file_logo_blog');
      $file_name_logo_blog=time().'.'.$file_logo_blog->guessExtension();
      if (!empty($blog->image)) {
        if(file_exists( base_path(). '/public/upload/blog/' .$blog->image )){
          $delete_image_logo_blog=unlink(base_path(). '/public/upload/blog/' .$blog->image);
          $pathLogo_blog=$request->file('file_logo_blog')->move(base_path() . '/public/upload/blog/',$file_name_logo_blog);
        }else {
          $pathLogo_blog=$request->file('file_logo_blog')->move(base_path() . '/public/upload/blog/',$file_name_logo_blog);
        }
      }else {
          $pathLogo_blog=$request->file('file_logo_blog')->move(base_path() . '/public/upload/blog/',$file_name_logo_blog);
      }
    }
    $blog->title=$request->title;
    $blog->content=$request->content;
    $blog->user_id=Auth::user()->id;
    $blog->image=$file_name_logo_blog;
    $blog->tags=$request->tags;
    $blog->save();
    return redirect('admin/blog');
  }

  public function delete($id)
  {
    $blog= Blog::find($id);
    if(file_exists( base_path(). '/public/upload/blog/' .$blog->image )){
      $delete_image_logo_blog=unlink(base_path(). '/public/upload/blog/' .$blog->image);
    }
    $blog->delete();
    return redirect('admin/blog');
  }
}
