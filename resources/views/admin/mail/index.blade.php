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
          <li class="breadcrumb-item active">Mailbox</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Our Mail</h4>
            <div class="table-responsive m-t-40">
              <table class="table display table-bordered table-striped no-wrap" id="config-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mail as $key => $data)
                    <tr>
                      <td style="vertical-align: middle">{{ $key+1 }}</td>
                      <td style="vertical-align: middle">{{ $data->name }}</td>
                      <td style="vertical-align: middle">{{ strip_tags($data->subject) }}</td>
                      <td style="vertical-align: middle">
                        <a href="{{ url('admin/mail/see/'.$data->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> See</a>
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
            url: "{{ url('admin/mail/delete')}}" + '/' + id,
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
