<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mailbox;
use Auth;

class MailController extends Controller
{
  public function index() {
    $mail = Mailbox::get();
    return view('admin/mail/index', compact('mail'));
  }
  public function see($id) {
    $mail = Mailbox::find($id);
    return view('admin/mail/see', compact('mail'));
  }
  public function delete($id) {
    $mail= Mailbox::find($id);
    $mail->delete();
    return redirect('admin/mail');
  }
}
