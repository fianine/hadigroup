@extends('admin.layouts.app')
@section('content')
  <div class="container">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Company</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item active">Company</li>
        </ol>
      </div>
      <div class="col-md-7 align-self-center text-right d-none d-md-block">
        <a href="{{ url('admin/company/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Create New</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Our Company</h4>
            <div class="table-responsive m-t-40">
              <table class="table display table-bordered table-striped no-wrap" id="config-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Logo</th>
                    <th>Company Name</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($company as $key => $data)
                    <tr>
                      <td style="vertical-align: middle">{{ $key+1 }}</td>
                      <td style="vertical-align: middle"> <img src="{{ asset('/upload/company/logo/'.$data->company_logo) }}" class="img-fluid"> </td>
                      <td style="vertical-align: middle">{{ $data->company_name }}</td>
                      <td style="vertical-align: middle">
                        <a href="{{ url('admin/company/edit/'.$data->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                        <button class="btn btn-danger button-delete" onclick="deleteData({{ $data->id }})" type="submit"><i class="fa fa-trash"></i> Delete</button>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script src="{{ asset('/assets/backend/js/sweetalert.min.js') }}"></script>
  <script type="text/javascript">
    function deleteData(id) {
      var csrf_token = $('meta[name="csrf-token"]').attr('content');
      swal({
        title: "Are you sure ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yap, delete!",
        cancelButtonText: "Nope, don't delete!",
        closeOnConfirm: false,
        closeOnCancel: false
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url: "{{ url('admin/company/delete')}}" + '/' + id,
            type: "POST",
            data: {
              '_method': 'DELETE',
              '_token': csrf_token
            },
            success: function(){
              Swal.fire(
                'Deleted!',
                'Deleted successfully !',
                'success'
              ).then(function() {
                location.reload();
              });
            },
            error: function() {
              swal({
                title: 'Opps...',
                text: 'Error',
                type: 'error',
                timer: '1500'
              })
            }
          });
        } else {
          swal("Delete cancel !");
        }
      });
    }
  </script>
@endsection
