@extends('admin.layout.layouts')
@section('content')

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
<div class="container m-0 p-0">
    <div class="card m-0 p-0">
        <div class="card-header">
            Total Katha Bookings
        </div>
        <div class="card-body table-responsive">
            <table class="table table-sm small table-hover" id="dataTable">
                <thead>
                    <tr class="small">
                        <th>#</th>
                        <th>Katha ID</th>
                        <th>Kathavachak</th>
                        <th>Jajmaan</th>
                        <th>Total</th>
                        <th>Advance</th>
                        <th>Balance</th>
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
                            <td>
                                <span>{{ kathavachak_name($booking->kathavachak_id) }}</span>
                                <span><small>{{ kathavachak_number($booking->kathavachak_id) }}</small>, <small>{{ $booking->kathavachak_id }}</small></span>
                            </td>
                            <td>
                                <span>{{ jajmaan_name($booking->jajman_id) }}</span>
                                <span><small>{{ jajmaan_number($booking->jajman_id) }}</small>, <small>{{ $booking->jajman_id }}</small></span>
                            </td>
                            <td>{{ $booking->total_price }}</td>
                            <td>{{ $booking->advance }}</td>
                            <td>{{ $booking->balance }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>{{ $booking->booking_date }} {{ $booking->time }}</td>
                            <td>{{ $booking->location }}</td>
                            <td>
                                @if($booking->booking_status=='0')
                                    <span class="text-warning">Pending</span>
                                @elseif($booking->booking_status=='1')
                                    <span class="text-success">Complete</span>
                                @else
                                    <a href="#" class="text-danger cancelled" data-id="{{ $booking->booking_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">Cancelled</a>
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
            @if(Route::currentRouteName() == 'admin.cancel.kathas')
            <div class="col-12 border-bottom mb-3 float-left">
                <button class="btn btn-primary p-2" id="initate_refund" data-id="">Initate Refund</button>
            </div>
            @endif
        </div>
      </div>
    </div>
  </div>




<script>
    $('.cancelled').click(function(){
        var bookid = $(this).attr('data-id');
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
@endsection
