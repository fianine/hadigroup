@extends('page.layouts.app')
@section('content')
  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-header">
            <div class="mx-auto">
              <h2 style="text-align: center">Contact</h2>
              <div class="bg-gradient-contact"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box-address">
            <h4>Our Address</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <div class="phone">
              <i class="fa fa-phone"></i> <span>021 9999 9999</span>
            </div>
            <div class="email">
              <i class="fa fa-envelope"></i> <span>admin@hadigroup.xyz</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box-maps">
            <h4>Our Location</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2561123427727!2d106.72180171446587!3d-6.229927962745058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e6641d8f83%3A0x56be8c7d0037c89c!2sHamura%20Agency!5e0!3m2!1sid!2sid!4v1573632766841!5m2!1sid!2sid" width="100%" height="191px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-md-12">
          <div class="box-form">
            <h4>Lets in touch</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <form class="form">
              <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control form-line">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control form-line">
              </div>
              <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control form-line">
              </div>
              <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control form-line">
              </div>
              <div class="form-group">
                <label>Message</label>
                <textarea name="name" class="form-control form-line"></textarea>
              </div>
              <div class="form-group">
                <button type="button" name="button" class="btn btn-primary btn-md btn-width">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
