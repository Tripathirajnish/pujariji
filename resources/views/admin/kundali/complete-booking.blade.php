@extends('admin.layout.layouts')
@section('title','Pujari Ji || Kundali Completed Booking List')
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
{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Kundali Completed Booking List</h5>
                <span class="bg-light p-2 border shadow-sm p-3 mb-0 bg-light rounded">
                    <input type="text" id="startDate" placeholder="Start Date" class="datePicker"/>
                    <input type="text" id="endDate" placeholder="End Date" class="datePicker"/>
                </span>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-responsive small" id="dataTable">
                        <thead>
                            <tr class="small">
                                <th>#</th>
                                <th>Booking ID</th>
                                <th>Kundali</th>
                                <th>Jajmaan</th>
                                <th>Kundali User</th>
                                <th>Contact</th>
                                <th>Language</th>
                                <th>Request Date</th>
                                <th>Booked Date</th>
                                <th>Amount</th>
                                <th>Complete Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $value)
                                <tr class="small">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->booking_id }}</td>
                                    <td class="text-nowrap">
                                        <label class="fw-bold">Kundali : </label><span>{{ kundali_name($value->kundali_id) }}</span><br>
                                        <label class="fw-bold">ID : </label>{{ $value->kundali_id }}
                                    </td>
                                    <td>
                                        <p class="m-0 p-0">
                                            <span>{{ jajmaan_name($value->jajmaan_id) }},<br>
                                            <label class="mx-1 fw-bold">ID:</label>{{ $value->jajmaan_id }} </span>
                                        </p>
                                    </td>
                                    <td class="text-nowrap">
                                        <p class="m-0 p-0">
                                            <span><label class="fw-bold">Name :</label> {{ $value->name }}</span>
                                            <label class="fw-bold">Gender:</label>{{ $value->gender=='0'?'Male':($value->gender=='1'?'Female':'Other') }} </span><br>
                                            <span><label class="fw-bold">Birth :</label> {{ date('d-M-Y',strtotime($value->dob_date)) }} {{ date('H:i A',strtotime($value->dob_time)) }}</span><br>
                                            <span><label class="fw-bold">Birth Place :</label> {{ $value->dob_place }}</span>
                                        </p>
                                    </td>
                                    <td class="text-nowrap">
                                        <p class="m-0 p-0">
                                            <span><label class="fw-bold">Email :</label> {{ $value->email }}</span><br>
                                            <label class="fw-bold">What's App:</label><a href="https://wa.me/+91{{ $value->whatapp_number}}">{{ $value->whatapp_number }}</a> </span>
                                        </p>
                                    </td>
                                    <td>{{ $value->language }}</td>
                                    <td class="text-nowrap">{{ date('Y-m-d',strtotime($value->requested_date)) }}</td>
                                    <td class="text-nowrap">{{ date('Y-m-d',strtotime($value->created_at)) }}</td>
                                    <td>
                                        {{ $value->total }}<br>
                                        <label class="fw-bold">ID-</label><span class="">{{ $value->transection_id }}</span>
                                    </td>
                                    <td>{{ date('d-M-Y',strtotime($value->updated_at)) }}</td>
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
                var currentDate = data[8];

                if ((startDate === '' || currentDate >= startDate) && (endDate === '' || currentDate <= endDate)) {
                    return true;
                }

                return false;
            }
        );
    });
</script>
@endsection
