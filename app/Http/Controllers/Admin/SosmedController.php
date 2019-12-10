<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sosmed;
use Auth;
use Redirect;

class SosmedController extends Controller
{
  public function index($id) {
    $sosmed = Sosmed::find($id);
    return view('admin/content/socmed/add', compact('sosmed'));
  }
 
  public function update(Request $request, $id) {
      $this->validate($request, [
        'email' => 'required',
        'instagram' => 'required',
        'facebook' => 'required',
      ]);
      $sosmed = Sosmed::find($id);
      $sosmed->email=$request->email;
      $sosmed->instagram=$request->instagram;
      $sosmed->facebook=$request->facebook;
      $sosmed->save();
      return Redirect::back();
  }
}
