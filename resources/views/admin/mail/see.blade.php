@extends('admin.layouts.app')
@section('content')
  <div class="container">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Mailbox</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item">Mailbox</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-inverse">
              <tr>
                <th width="10">Name</th>
                <td>: {{ $mail->name }}</td>
                <th width="10">Email</th>
                <td>: {{ $mail->email }}</td>
              </tr>
              <tr>
                <th width="10">Phone</th>
                <td>: {{ $mail->phone }}</td>
                <th width="10">Subject</th>
                <td>: {{ $mail->subject }}</td>
              </tr>
            </table>
            <div class="form-group">
              <label>Message</label>
              <textarea readonly class="form-control">{{ $mail->message }}</textarea>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
