@extends('admin.layout.layouts')
@section('title','Pooja List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Pooja List</h5>
            @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
            <a href="{{ url('virtual-add-new-pooja') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Pooja</a>
            @endif
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
                        <td class="text-center fw-bold">Pooja</td>
                        <td>Bookings</td>
                        <td>TotalAmounts</td>
                        @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                        <td>Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr class="small text-wrap">
                            <td width="15%">
                                <div class="d-flex justify-space-between small text-wrap">
                                    <div><img src="{{ $value->image }}" class="img-responsive rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="pt-2 ms-1">
                                        <a href="#" class="text-nowrap details" data-id="{{ $value->pooja_id }}" data-bs-toggle="modal" data-bs-target="#flipInXAnimationModal" title="View More">{{ virtual_pooja_name($value->id)['eng_name'] }}</a><br>
                                        <span class="text-nowrap">
                                            <small class="small me-2">{{ virtual_category_name($value->category_id) }}</small>
                                            <i class="fa fa-clock"></i>
                                            <small class="small">{{ date('d-F-y',strtotime($value->created_at)) }}</small>

                                        </span>
                                    </div>
                                </div>
                            </td>
                            
                            
                            <td>{{ $value->bookings }}</td>
                            <td>{{ $value->amounts }}</td>
                            @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                            <td width="15%" class="text-nowrap">
                                <div class="toggle-wrapper">
                                    <label class="toggle-switch">
                                        <input type="checkbox" class="toggle-status updateStatustoggle"  data-url="{{ url('virtual-update-pooja') }}" data-id="{{ $value->pooja_id }}" @if($value->status=='1') checked @endif>
                                        <span class="slider"></span>
                                    </label>
                                </div>

                                <span class="mx-2">||</span>
                                <a href="{{ url('virtual-edit-pooja',base64_encode($value->pooja_id)) }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <a class="btn btn-success btn-xs" target="_blank" href="{{ url('puja',$value->pooja_id) }}">View Sample</a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->pooja_id }}" data-url="{{ url('virtual-delete-pooja') }}"></i>
                                
                            </td>
                            @endif
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
          <h5 class="modal-title" id="exampleModalLabel">Description</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <label for="english" class="fw-bold">English Description</label>
            <p id="english" class=" border p-2"></p>
            <label for="hindi" class="fw-bold">Hindi Description</label>
            <p id="hindi" class=" border mb-3 p-2"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>






<script>

// Description
    $(document).ready(function () {
        $('body').on('click', '.view_description', function() {
            var url = $(this).data('url');
            var id = $(this).data('id');
            var ths = $(this);
            $.ajax({
                type: "POST",
                url: url,
                data: { data: id },
                success: function (response) {
                    $('#hindi').html(response.description_hindi);
                    $('#english').html(response.description);
                }
            });
        });
    });


// Filter
$(document).ready(function() {
        var table = $('#dataTable').DataTable();

        var select = $('<select id="paymentForFilter" class="form-control-sm me-5"><option value="All">All</option></select>')
            .prependTo($('#dataTable_wrapper .dataTables_filter'))
            .on('change', function () {
                var selectedValue = $(this).val();
                if (selectedValue === 'All') {
                    table.column(1).search('').draw();
                } else {
                    table.column(1).search(selectedValue).draw();
                }
            });

        table.column(1).data().unique().sort().each(function (d, j) {
            select.append('<option value="' + d + '">' + d + '</option>');
        });

       // select.before(totalElement);


        $('#example tbody').on('change', 'input.toggle-status', function() {
                var id = $(this).data('id');
                var status = $(this).is(':checked') ? 'on' : 'off';
        });



    });
  </script>
@endsection
