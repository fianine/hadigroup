<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Content_header;
use Auth;

class ContentController extends Controller
{
  public function index($id)
  {
    $content = Content_header::find($id);
    return view('admin/content/header/add', compact('content'));
  }
  public function update(Request $request, $id)
  {
    if ($request) {
      $this->validate($request, [
        'content' => 'required',
      ]);
      $file = $request->file('file');
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
      echo 'File Size: '.$file->getSize();
      echo '<br>';
      echo 'File Mime Type: '.$file->getMimeType();
      $content = Content_header::find($id);
        $file=$request->file('file');
        $file_name_logo_content=time().'.'.$file->guessExtension();
        if (!empty($content->image)) {
          $data_upload = 'upload/content';
          if(file_exists( $data_upload.'/'.$content->image )){
            $delete_image_logo_content=unlink($data_upload. '/' .$content->image);
            $pathLogo_content=$request->file('file')->move($data_upload, $file_name_logo_content);
          } else {
            $pathLogo_content=$request->file('file')->move($data_upload, $file_name_logo_content);
          }
        } else {
            $pathLogo_content=$request->file('file')->move($data_upload, $file_name_logo_content);
        }
        $content->content=$request->content;
        $content->image=$file_name_logo_content;
        $content->save();
      return redirect('admin/dashboard');
    }
  }
}
