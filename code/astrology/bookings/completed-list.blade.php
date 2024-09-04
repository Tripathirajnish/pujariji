@extends('admin.layout.layouts')
@section('title','Completed Booking List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table th {
        font-size: 11px !important;
        padding: 1 !important;
        width: 8px !important;
    }

    table td {
        font-size: 11px !important;
        padding: 1 !important;
        width: 8px !important;
    }

</style>


<script>
    // $(document).ready( function () {
    //     $('#my_dataTable').DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: "{!! route('get.astro') !!}",
    //         columns: [
    //             { data: 'id', name: 'id'},
    //             { data: 'Astrologer', name: 'Astrologer'},
    //             { data: 'phone', name: 'phone'},
    //             { data: 'astro_city', name: 'astro_city'},
    //             { data: 'astro_state', name: 'astro_state'},
    //             { data: 'action', name: 'action'},
    //         ]
    //     });
    // } );
</script>

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="card-header d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Completed Booking List</h5>
                <span class="bg-light p-2 border shadow-sm p-3 mb-0 bg-light rounded">
                    <input type="text" id="startDate" placeholder="Start Date" class="datePicker"/>
                    <input type="text" id="endDate" placeholder="End Date" class="datePicker"/>
                </span>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-responsive" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>Booking ID</th>
                                <th>Astrologer</th>
                                <th>Yajman</th>
                                <th>Price</th>
                                <th>Plan</th>
                                <th>Talk Time</th>
                                <th>Date</th>
                                <th>Slot</th>
                                <th width="8px">Notes</th>
                                <th>Booked Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr class="text-nowrap">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->booking_id }}</td>
                                    <td>
                                        <p class="m-0 p-0">
                                            <span>{{ astro_name($value->astro_id) }} <br>{{ $value->astro_id }} </span>
                                        </p>
                                    </td>
                                    <td>
                                        <p class="m-0 p-0">
                                            <span>{{ jajmaan_name($value->jajmaan_id) }}, <label class="mx-1 fw-bold">ID:</label>{{ $value->jajmaan_id }}, {{ jajmaan_gender($value->jajmaan_id) }} </span><br>
                                            <span><label class="fw-bold">Birth :</label> {{ date('d-M-Y',strtotime($value->jajman_dob)) }} {{ date('H:i A',strtotime($value->dob_time)) }}</span>
                                        </p>
                                    </td>
                                    <td>
                                        <label class="fw-bold">MRP : </label>₹{{ $value->plan_amt }}<br>
                                        <label class="fw-bold">Price : </label>₹{{ $value->plan_price }}<br>
                                        <label class="fw-bold">ID : </label>{{ $value->transaction_id }}
                                    </td>
                                    <td>
                                        <p class="m-0 p-0">
                                            <span><label class="mx-1 fw-bold">Plan:</label>{{ astro_plan_name($value->plan_id) }}</span><br>
                                            <span><label class="fw-bold">Plan ID :</label> {{ $value->plan_id }}</span>
                                        </p>
                                    </td>
                                    <td>{{ $value->talk_time }} min</td>
                                    <td>{{ date('Y-m-d',strtotime($value->astro_date)) }}</td>
                                    <td>{{ ucwords($value->astro_slot) }}</td>
                                    <td><a href="javascript:void(0)" class="view_notes" data-id="{{ $value->booking_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">View</a></td>
                                    <td>{{ date('d-M-Y',strtotime($value->booking_date)) }}</td>
                                    {{-- <td>
                                        <a href="#" class="updateStatustoggle" data-url="{{ url('update_astro') }}" data-id="{{ $value->booking_id }}">
                                            @if($value->status=='0')
                                            <i class="fa fa-eye text-success"></i>
                                            @else
                                            <i class="fa fa-eye-slash text-danger"></i>
                                            @endif
                                        </a>
                                        <span class="mx-2">||</span>
                                        <a href="{{ url('edit-astro',base64_encode($value->booking_id)) }}"><i class="fa fa-edit text-info edit" data-url="{{ $value->booking_id }}"></i></a>
                                        <span class="mx-2">||</span>
                                        <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->booking_id }}" data-url="{{ url('delete_plan') }}"></i>
                                    </td> --}}
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Notes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <hr class="p-0 m-0">
        <div class="modal-body">
            <div class="form-group mb-2 row">
                <label class="col-3 control-label fw-bold">Notes : </label>
                <div class="col-9"><span class="form-control p-2" id="autoResizeTextarea"></span></div>
            </div>
        </div>
      </div>
    </div>
  </div>

<script>
    $('.view_notes').click(function(){
        var id = $(this).data('id');
        $('#autoResizeTextarea').empty();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('get-cancel-details') }}",
            data: {data:id},
            success: function (response) {
                $('#autoResizeTextarea').text(response.astro_notes);
            }
        });
    });

</script>
<script>
    $(document).ready(function () {
        var dataTable = $('#dataTable').DataTable();
        $('#startDate, #endDate').on('change', function () {
            var startDate = $('#startDate').val();
            var endDate = $('#endDate').val();

            dataTable.draw();
        });

        $('.datePicker').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });

        $.fn.dataTable.ext.search.push(
            function (settings, data, dataIndex) {
                var startDate = $('#startDate').val();
                var endDate = $('#endDate').val();
                var currentDate = data[7];

                if ((startDate === '' || currentDate >= startDate) && (endDate === '' || currentDate <= endDate)) {
                    return true;
                }

                return false;
            }
        );
    });
</script>
@endsection
