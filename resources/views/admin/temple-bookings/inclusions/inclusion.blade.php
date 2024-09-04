@extends('admin.layout.layouts')
@section('title','Inclusion List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Inclusion List</h5>
            <a class="btn btn-primary text-white add_new_inclusion" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add New Inclusion</a>
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
            <table class="table table-sm table-hover" id="dataTable">
                <thead>
                    <tr class="small bg-secondary text-white">
                        <td>SN</td>
                        <td>Inclusion</td>
                        <td>Package</td>
                        <td>Pooja</td>
                        <td>Price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $value->name }}<br>{{ $value->name_hindi }}</td>
                            <td>{{ $value->package }}<br>{{ $value->package_hindi }}</td>
                            <td>{{ $value->pooja }}<br>{{ $value->pooja_hindi }}</td>
                            <td>{{ $value->price }}</td>
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('temple-update-inclusion') }}" data-id="{{ $value->inclusion_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="javascript:void(0)" class="edit_inclusion" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->inclusion_id }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->inclusion_id }}" data-url="{{ url('temple-delete-inclusion') }}"></i>
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
        <form action="{{ url('temple-save-inclusion') }}" method="post" id="form_id">
        <div class="modal-body">
            @csrf
            <input type="hidden" name="inclusion_id">
            <div class="form-group mb-2">
                <label for="name">Pooja</label>
                <select class="form-control" name="pooja_id" id="pooja_id">
                    <option value="" disabled selected>--Select Pooja--</option>
                    @foreach ($pooja as $item)
                        <option value="{{ $item->pooja_id }}">{{ $item->name }}({{ $item->name }})</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="name">Package</label>
                <select class="form-control" name="package_id" id="pakcage_id">
                    <option value="" disabled selected>--Select Pooja First--</option>
                    {{-- @foreach ($package as $item)
                        <option value="{{ $item->package_id }}">{{ $item->name }}({{ $item->name_hindi }})</option>
                    @endforeach --}}
                </select>
            </div>
            <!-- <div class="form-group mb-2">
                <label for="name">Package</label>
                <select class="form-control" name="package_id">
                    <option value="" disabled selected>--Select Package--</option>
                    @foreach ($package as $item)
                        <option value="{{ $item->package_id }}">{{ $item->name }}({{ $item->name_hindi }})</option>
                    @endforeach
                </select>
            </div> -->
            <div class="form-group mb-2">
                <label for="name">Inclusion Name</label>
                <input type="text" name="inclusion_name" value="{{ old('inclusion_name') }}" class="form-control" placeholder="Enter Inclusion Name" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">Inclusion Name Hinid</label>
                <input type="text" name="inclusion_name_hindi" value="{{ old('inclusion_name_hindi') }}" class="form-control" placeholder="Enter Inclusion Name in Hindi" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">Inclusion Price</label>
                <input type="text" name="inclusion_price" value="{{ old('inclusion_price') }}" class="form-control numericInput" placeholder="Enter Inclusion Price" required>
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
    $('.add_new_inclusion').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Add New Inclusions');
    })
  </script>

  <script>
    $('.edit_inclusion').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Edit Inclusions');
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('temple-get_inclusion') }}",
            data: {data:id},
            success: function (response) {
                console.log(response);
                $("input[name='inclusion_id']").val(response.inclusion_id);
                $("select[name='pooja_id']").val(response.pooja_id);
                $("select[name='package_id']").append($('<option>', {
                    value: response.package_id,
                    text: response.package_name,
                    selected: true // Set this option as selected
                }));
                $("input[name='inclusion_name']").val(response.name);
                $("input[name='inclusion_name_hindi']").val(response.name_hindi);
                $("input[name='inclusion_price']").val(response.price);
            }
        });
    });

    // Dependent dropdown 
    $(document).ready(function(){
        $('#pooja_id').on('change', function(){
            var pooja_id = $(this).val();
            if(pooja_id){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('get-temple-package-list') }}",
                    type: "POST",
                    dataType: "json",
                    data: {
                        pooja_id: pooja_id,
                        _token: '{{ csrf_token() }}'
                    },
                    success:function(data){
                        $('#pakcage_id').empty();
                            $('#pakcage_id').append('<option value="" disabled="" selected="">--Select Package--</option>');
                        $.each(data, function(key, value){
                            $('#pakcage_id').append('<option value="'+ value.package_id +'">'+ value.name +' ( '+ value.name_hindi +')</option>');
                        });
                    }
                });
            }else{
                $('#pakcage_id').empty();
            }
        });
    });
  </script>
@endsection

