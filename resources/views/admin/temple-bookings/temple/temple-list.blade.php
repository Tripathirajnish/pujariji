@extends('admin.layout.layouts')
@section('title','Temple List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Temple List</h5>
            <a href="javascript:void(0)" class="btn btn-primary add_new" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add New Temple</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body table-responsive">
            <table class="table table-sm table-hover">
                <thead>
                    <tr class="small bg-secondary text-white">
                        <td>SN</td>
                        <td>Temple ID</td>
                        <td>Temple</td>
                        <td></td>
                        <td>Total Pooja</td>
                        <td>Added On</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $value->temple_id }}</td>
                            <td>{{ $value->temple_name }}</td>
                            <td>{{ $value->temple_name_hindi }}</td>
                            <td><a href="">{{ $value->t_pooja }}</a></td>
                            <td>{{ date('d-M-Y',strtotime($value->created_at)) }}</td>
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update-temple') }}" data-id="{{ $value->temple_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="javascript:void(0)" class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->temple_id }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->temple_id }}" data-url="{{ url('delete-category') }}"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('/save-temple') }}" method="post" enctype="multipart/form-data" id="form_id">
            @csrf
            <input type="hidden" name="temple_id" value="" id="temple_id">
            <div class="modal-body">
            <div class="form-group mb-3">
                <label for="">Temple Name(English)</label>
                <div>
                    <input type="text" name="temple_name" class="form-control" placeholder="Temple Name in English">
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="">Temple Name(Hindi)</label>
                <div>
                    <input type="text" name="temple_name_hindi" class="form-control" placeholder="Temple Name in Hindi">
                </div>
            </div>
            </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    $('.add_new').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Add New Temple');
    })
  </script>

  <script>
    $('.edit').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Edit Temple');
        var id = $(this).data('id');
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            type: "POST",
            url: "{{ url('get-temple') }}",
            data: {data:id},
            success: function (response) {
                // console.log(response);
                $("input[name='temple_id']").val(response.temple_id);
                $("input[name='temple_name']").val(response.temple_name);
                $("input[name='temple_name_hindi']").val(response.temple_name_hindi);
            }
        });
    })
  </script>
@endsection
