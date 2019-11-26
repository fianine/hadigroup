@extends('admin.layouts.app')
@section('content')
  <div class="container">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">About</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item">About</li>
          <li class="breadcrumb-item active">Mission</li>
        </ol>
      </div>
      <div class="col-md-7 align-self-center text-right d-none d-md-block">
        <a href="{{ url('admin/about/mission/add') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Create New</a>
      </div>
    </div>
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Our Mission</h4>
          <div class="table-responsive m-t-40">
            <table class="table display table-bordered table-striped no-wrap" id="config-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mission</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($mission as $key => $data)
                  <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{!! substr($data->mission, 0, 100) !!}...</td>
                    <td>
                      <a href="{{ url('admin/about/mission/edit/'.$data->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
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
            url: "{{ url('admin/about/mission/delete')}}" + '/' + id,
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
