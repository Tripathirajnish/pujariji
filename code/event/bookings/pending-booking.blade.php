@extends('admin.layout.layouts')
@section('title','Pujari Ji || Event Pending Bookings')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1 fw-bold">Event Pending Bookings</h5>
                <span class="bg-light p-2 border shadow-sm p-3 mb-0 bg-light rounded">
                    <input type="text" id="startDate" placeholder="Start Date" class="datePicker"/>
                    <input type="text" id="endDate" placeholder="End Date" class="datePicker"/>
                </span>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover small" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Booking ID</th>
                                <th>Date</th>
                                <th>Event</th>
                                <th>Total Price</th>
                                <th>Yajman</th>
                                <th>Delivery Address</th>
                                <th>Payment Details</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($data as $key =>$value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->booking_id }}</td>
                                    <td class="text-nowrap">{{ date('Y-m-d',strtotime($value->event_date)) }}</td>
                                    <td>
                                        <span class="fw-bold">Event ID : </span>{{ $value->event_id }}<br>
                                        <span class="fw-bold">{{ $value->event_name }}</span><br>
                                        <span>Date : </span> {{ date('d-M-Y',strtotime($value->event_date)) }}
                                    </td>
                                    <td>
                                        <span class="fw-bold">Total : ₹{{ $value->total_payment??0 }}</span>
                                        <br>
                                        <small class="fw-bold">Event Price : </small>₹{{ $value->event_price??0 }}
                                        <small class="fw-bold ms-1">Dakshina Price : </small>₹{{ $value->dakshina_price??0 }}<br>
                                        <small class="fw-bold">GuruSeva Price : </small>₹{{ $value->guru_seva_price??0 }}
                                        <small class="fw-bold ms-1">Rudraksh Price : </small>₹{{ $value->rudraks_price??0 }}<br>
                                        <small class="fw-bold">Prasad Delivery Price : </small>₹{{ $value->delivery_price??0 }}
                                    </td>
                                    <td>
                                        <small class="fw-bold">Jajmaan ID : </small>{{ $value->jajmaan_id }}<br>
                                        <small class="fw-bold">Name</small>{{ jajmaan_name($value->jajmaan_id) }}<br>
                                        <small class="fw-bold">Number : </small> {{ jajmaan_number($value->jajmaan_id) }}
                                    </td>
                                    <td>
                                        <span class="fw-bold">Address : </span>{{ $value->delivery_address }}<br>
                                        <span class="fw-bold">Whats App</span>{{ $value->whats_app_number }}
                                    </td>
                                    <td>
                                        <small class="fw-bold">Transection ID : </small>{{ $value->transection_id }} <br>
                                        <small class="fw-bold">Payment Date : </small>{{ date('d-M-Y',strtotime($value->payment_date)) }}<br>
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
                var currentDate = data[2];

                if ((startDate === '' || currentDate >= startDate) && (endDate === '' || currentDate <= endDate)) {
                    return true;
                }

                return false;
            }
        );
    });
</script>
@endsection
