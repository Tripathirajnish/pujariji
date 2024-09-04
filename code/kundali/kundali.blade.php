@extends('admin.layout.layouts')
@section('title','Pujari Ji || Kundali List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Kundali List</h5>
                <button class="btn btn-primary p-2 me-4 mt-3 add" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>New Kundali</button>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Kundali</th>
                                <th>Kundali(Hindi)</th>
                                <th>Price</th>
                                <th>Added On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->name_hindi }}</td>
                                <td>{{ $value->price }}</td>
                                <td>{{ date('d-m-Y',strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="#" class="updateStatustoggle" data-url="{{ url('update_kundali') }}" data-id="{{ $value->kundali_id }}">
                                        @if($value->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-edit text-info edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->kundali_id }}"></i>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->kundali_id }}" data-url="{{ url('delete_kundali') }}"></i>
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
        <form action="{{ route('addNewkundaliPost') }}" method="post" enctype="multipart/form-data">
        @csrf
            <input type="hidden" name="id" id="id">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text"> Kundali </span>
                    <input type="text" aria-label="First name" class="form-control" id="kundali" name="kundali">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> Kundali Hindi </span>
                    <input type="text" class="form-control" id="kundali_hindi" name="kundali_hindi">
                </div>
                <div class="input-group">
                    <span class="input-group-text"> Kundali Price </span>
                    <input type="text" class="form-control numericInput" id="price" name="price">
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
        $('#modelTitle').text('Add Kundali');
    })

    $('.edit').click(function(){
        $('form')[0].reset();
        $('#image').empty();
        $('#modelTitle').text('Edit Kundali');
        var id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: "{{ url('edit-kundali') }}",
            data: {data:id},
            success: function (response) {
            console.log(response);
                $('#id').val(response.kundali_id);
                $('#kundali').val(response.name);
                $('#kundali_hindi').val(response.name_hindi);
                $('#price').val(response.price);
            }
        });
    })
</script>
@endsection
