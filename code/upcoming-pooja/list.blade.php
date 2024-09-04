@extends('admin.layout.layouts')
@section('title','Upcoming Pooja List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Upcoming Pooja List</h5>
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
                        <td>Category</td>
                        <td>Min Price</td>
                        <td>Max Price</td>
                        <td>Description</td>
                        {{-- <td>Description</td>
                        <td>Description Hindi</td> --}}
                        <td>Bookings</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr class="small">
                            <td width="15%">
                                <div class="d-flex justify-space-between small text-wrap">
                                    <div><img src="{{ $value->image }}" class="img-responsive rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="pt-2 ms-1">
                                        <a href="#" class="text-nowrap details" data-id="{{ $value->pooja_id }}" data-bs-toggle="modal" data-bs-target="#flipInXAnimationModal" title="View More">{{ $value->name }} ({{ $value->name_hindi }})</a><br>
                                        <span class="text-nowrap">
                                            <small class="small me-2">{{ $value->pooja_id }}</small>
                                            <i class="fa fa-clock"></i>
                                            <small class="small">{{ date('d-F-y',strtotime($value->date)) }}</small>

                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>{{ category_name($value->category_id) }}</td>
                            <td>₹{{ $value->min_price }}</td>
                            <td>₹{{ $value->max_price }}</td>
                            <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="view_description" data-url="{{ url('getpoojadetails') }}" data-id="{{ $value->pooja_id }}">View</a></td>
                            {{-- <td><p class="d-inline-block text-truncate" style="max-width: 130px;">{{ $value->description }}</p></td>
                            <td><p class="d-inline-block text-truncate" style="max-width: 130px;">{{ $value->description_hindi }}</p></td> --}}
                            <td>{{ $value->bookings }}</td>
                            <td class="btn-sm small">
                                <input type="checkbox" class="updateStatustoggle_new" @if($value->upcoming_pooja=='0') checked @endif data-toggle="toggle" data-on="ON" data-off="OFF" data-onstyle="success" data-offstyle="danger" data-size="mini" data-url="{{ url('set-upcoming-pooja') }}" data-id="{{ $value->pooja_id }}">
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

        // Update Status  ON / OFF
        $(document).ready(function () {
            $('body').on('change', '.updateStatustoggle_new', function() {
            var url = $(this).data('url');
            var id = $(this).data('id');
            var ths = $(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: url,
                data: { data: id },
                success: function (response) {
                    toastr.success('Status Updated Successfully');
                    // ths.empty();
                    // if (response === '1') {
                    //     ths.html("<i class='fa fa-eye-slash text-danger'></i>");
                    // } else {
                    //     ths.html("<i class='fa fa-eye text-success'></i>");
                    // }
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

        select.before(totalElement);
    });
</script>

@endsection
