@extends('admin.layout.layouts')
@section('title','Pujari Ji || Language List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Language List</h5>
                <button class="btn btn-primary p-2 me-4 mt-3 add" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>New Language</button>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Language</th>
                                <th>Language(Hindi)</th>
                                <th>Added On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($laguages as $laguage)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $laguage->language }}</td>
                                <td>{{ $laguage->language_hindi }}</td>
                                <td>{{ $laguage->date }}</td>
                                <td>
                                    <a href="#" class="updateStatustoggle" data-url="{{ url('update_language') }}" data-id="{{ $laguage->language_id }}">
                                        @if($laguage->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-edit text-info edit_language" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $laguage->language_id }}"></i>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $laguage->language_id }}" data-url="{{ url('delete_language') }}"></i>
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


  <!-- Add Language -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modelTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ route('save_language') }}" method="post" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" id="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text"> Language </span>
                    <input type="text" aria-label="First name" class="form-control" id="name" name="language">
                </div>
                <div class="input-group">
                    <span class="input-group-text"> Language Hindi </span>
                    <input type="text" class="form-control" id="language_hindi" name="language_hindi">
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
    $('.add').click(function(){
        $('form')[0].reset();
        $('#image').empty();
        $('#modelTitle').text('Add Language');
    })

    $('.edit_language').click(function(){
        $('form')[0].reset();
        $('#image').empty();
        $('#modelTitle').text('Edit Language');
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('edit_data_language') }}",
            data: {data:id},
            success: function (response) {
            console.log(response);
                $('#id').val(response.language_id);
                $('#name').val(response.language);
                $('#language_hindi').val(response.language_hindi);
            }
        });
    })
</script>
@endsection
