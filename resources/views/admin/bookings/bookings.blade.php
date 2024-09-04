@extends('admin.layout.layouts')
@section('content')

@php

    if(Route::currentRouteName()=='admin.pending.kathas') {
        $title = 'Pending';
    }
    if(Route::currentRouteName()=='admin.total.kathas') {
        $title = 'Complete';
    }
    if(Route::currentRouteName()=='admin.cancel.kathas') {
        $title = 'Cancelled';
    }
    if(Route::currentRouteName()=='admin.approved.cancel.kathas') {
        $title = 'Cancelled Approved';
    }
@endphp
@section('title',$title .' Katha Booking')
@php
    $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
    $cities = DB::table('pujari_city')->where('status','0')->orderBy('city','asc')->get();
@endphp
<style>
    table th{
        font-size: 11px !important;
    }
</style>
{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
<div class="container m-0 p-0">
    <div class="card m-0 p-0">
        <div class="card-header d-flex justify-content-between">
           <div class="fw-bold">{{ $title }} Katha Bookings </div>
           <div class="bg-light p-1">
               <form action="{{ url('booking_filter') }}" method="GET" class="d-inline">
                    <select name="state" class="form-control-sm state_selected" id="state">
                            <option value="" disabled selected>State Filter</option>
                           @foreach ($states as $item)
                               <option value="{{ $item->state }}" @isset($state) @if($state==$item->state) selected @endif @endisset>{{ $item->state }}</option>
                           @endforeach
                    </select>
                    <select name="city" class="form-control-sm" id="city" onchange="this.form.submit()">
                        <option value="" disabled selected>City Filter</option>
                    </select>
                </form>
                <span class="bg-light small rounded">
                    <input type="text" id="startDate" placeholder="Start Date" class="datePicker"/>
                    <input type="text" id="endDate" placeholder="End Date" class="datePicker"/>
                </span>
                <button type="button" class="btn btn-dark btn-sm" onclick="window.location='{{ url('total-kathas') }}'">Clear Filters</button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-sm small table-hover" id="dataTable">
                <thead>
                    <tr class="small">
                        <th>#</th>
                        <th>Booking ID</th>
                        <th>Katha Type</th>
                        <th>Kathavachak</th>
                        <th>Yajman</th>
                        {{-- <th>Total</th>
                        <th>Advance</th>
                        <th>Balance</th> --}}
                        <th>Payment</th>
                        <th>Book Date</th>
                        <th>Date Time</th>
                        <th>Location</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bookings as $booking)
                        <tr id="row_{{ $booking->booking_id }}">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->booking_id }}</td>
                            <td>{{ $booking->katha_type }}</td>
                            <td>
                                <span>{{ kathavachak_name($booking->kathavachak_id) }}</span><br>
                                <span><small>{{ kathavachak_number($booking->kathavachak_id) }}</small>, <small>{{ $booking->kathavachak_id }}</small></span>
                            </td>
                            <td>
                                <span>{{ jajmaan_name($booking->jajmaan_id) }}</span><br>
                                <span><small>{{ jajmaan_number($booking->jajmaan_id) }}</small>, <small>{{ $booking->jajmaan_id }}</small></span>
                            </td>
                            {{-- <td>{{ $booking->total_price }}</td>
                            <td>{{ $booking->advance }}</td>
                            <td>{{ $booking->balance }}</td> --}}
                            <td class="small" width="15%">
                                <label class="fw-bold">Total : </label><span>{{ $booking->total_price }}</span><br>
                                <label class="fw-bold">Advance : </label><span>{{ $booking->advance }}</span><br>
                                <label class="fw-bold">Balance : </label><span>{{ $booking->balance }}</span><br>
                                <label class="fw-bold">ID : </label><small>{{ $booking->transaction_id }}</small>
                            </td>
                            <td>{{ date('Y-m-d',strtotime($booking->advance_date)) }}</td>
                            <td width="10%">{{ date('Y-m-d',strtotime($booking->booking_date_from)) }}  - {{ date('Y-m-d',strtotime($booking->booking_date_to)) }}</td>
                            <td>{{ $booking->location }}</td>
                            <td>
                                @if($booking->booking_status=='0')
                                    <span class="text-warning">Pending</span>
                                @elseif($booking->booking_status=='1')
                                    <span class="text-success">Complete</span>
                                @else
                                    <a href="#" class="text-danger cancelled btn btn-xs btn-primary text-white" data-id="{{ $booking->booking_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">Cancelled</a>
                                @endif
                            </td>
                            @empty



                            @endforelse
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- !Content --}}

</div>

{{-- Get Cancelled Data --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom">
          <h5 class="modal-title" id="exampleModalLabel">Cancelled Account Deatails</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body row">
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Status : </label>
                <span id="book_status"></span>
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Cancel Date : </label>
                <span id="cancel_date"></span>
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Refund Date : </label>
                <span id="refund_date">
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Account Holder : </label>
                <span id="account_holder">
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Account Number : </label>
                <span id="account_number">
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">IFSC : </label>
                <span id="ifsc">
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Type : </label>
                <span id="type">
            </div>
            <div class="col-6 border-bottom mb-3">
                <label class="fw-bolder">Amount : </label>
                <span id="amount">
            </div>

            <div class="col-12 border-bottom mb-3">
                <label class="fw-bolder">Reason : </label>
                <span id="reason">
            </div>
            @if(session('type') == base64_encode('master_admin'))
            @if(Route::currentRouteName() == 'admin.cancel.kathas')
            <div class="col-12 border-bottom mb-3 float-left">
                <button class="btn btn-primary p-2" id="initate_refund" data-id="">Initate Refund</button>
            </div>
            @endif
            @endif
        </div>
      </div>
    </div>
  </div>




<script>
    $('.cancelled').click(function(){
        var bookid = $(this).attr('data-id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('cancelled_booking_data') }}",
            data: {data:bookid},
            success: function (response) {
                var status = response.booking_status=='0'?'Pending':(response.booking_status=='1'?'Complete':(response.booking_status=='2'?'Cancelled':'Refunded'));
                var type = response.can_type=='0'?'Saving':'Current';
                $('#book_status').text(status);
                $('#cancel_date').text(response.cancel_date);
                $('#refund_date').text(response.refund_date);
                $('#account_holder').text(response.can_acholder);
                $('#account_number').text(response.can_acnumber);
                $('#ifsc').text(response.can_ifsc);
                $('#type').text(type);
                $('#amount').text(response.can_amount);
                $('#reason').text(response.can_reason);
                $('#initate_refund').data('id', response.booking_id);
            }
        });
    })



    $('#initate_refund').click(function(){
        $('.btn-close').click();
        var ths = $(this);
        Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
        }).then((result) => {
            if (result.isConfirmed) {
                var id = ths.data('id');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ url('initate_refund') }}",
                    data: {data:id},
                    success: function (response) {
                        $('#row_'+id).remove();
                        Swal.fire('Saved!', 'Refund Initated & Notification Sent to Jajmaan', 'success')
                    }
                });
            } else if (result.isDenied) {
                Swal.fire('Something Went Wrong, Try Again!', '', 'info')
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
                var currentDate = data[6];

                if ((startDate === '' || currentDate >= startDate) && (endDate === '' || currentDate <= endDate)) {
                    return true;
                }

                return false;
            }
        );
    });
</script>



<script>
    $(document).ready(function() {
        // Variable to store the selected city
        var selectedCity = "{{ $filter_city??'' }}";

        $('body').on('change', '.state_selected', function() {
            var selectedState = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ url('get_cities') }}",
                type: 'POST',
                data: { data: selectedState },
                success: function(data) {
                    var citySelect = $('#city');
                    citySelect.empty();
                    citySelect.append($('<option></option>').text('Select City'));

                    if (data.length > 0) {
                        $.each(data, function(index, city) {
                            citySelect.append($('<option></option>').attr('value', city.name).text(city.name));
                        });
                    } else {
                        citySelect.append($('<option></option>').text('No cities found'));
                    }

                    // Set the selected city back after the request is successful
                    if (selectedCity) {
                        citySelect.val(selectedCity);
                    }
                },
                error: function() {
                    console.error('Failed to fetch cities');
                }
            });
        });

        // Trigger the change event on page load
        $('.state_selected').trigger('change');
    });
</script>

@endsection
