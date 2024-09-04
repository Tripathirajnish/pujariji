@extends('admin.layout.layouts')
@section('title','Pujari Ji || Payment Received via Payment Gateway')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Payment Received via Payment Gateway</h5>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Payment ID</th>
                                <th>Transection ID</th>
                                <th>Payment For</th>
                                <th>ID</th>
                                <th>Amount</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->payment_id }}</td>
                                <td>{{ $value->transection_id }}</td>
                                <td>{{ $value->payment_for_what }}</td>
                                <td>{{ $value->payment_for_id }}</td>
                                <td>₹{{ $value->amount }}</td>
                                <td>{{ date('d-F-Y',strtotime($value->created_at)) }}</td>
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
    $(document).ready(function() {
        var table = $('#dataTable').DataTable();
        var totalElement = $('<span class="total-amount me-5 fw-bold"></span>');

        function updateTotalAmount() {
            var selectedValue = $('#paymentForFilter').val();
            var columnData = table.column(5, { page: 'all' }).data().toArray();

            var filteredData = columnData.filter(function (value, index) {
                var paymentForValue = table.cell(index, 3).data();
                return selectedValue === 'All' || paymentForValue === selectedValue;
            });

            var totalAmount = filteredData.reduce(function (acc, val) {
                return acc + parseFloat(val.replace(/[^\d.-]/g, '')) || 0;
            }, 0);

            var formattedTotal = '₹' + totalAmount.toFixed(2);
            totalElement.text('Total Amount: ' + formattedTotal);
        }

        var select = $('<select id="paymentForFilter" class="form-control-sm me-5"><option value="All">All</option></select>')
            .prependTo($('#dataTable_wrapper .dataTables_filter'))
            .on('change', function () {
                updateTotalAmount();
                var selectedValue = $(this).val();
                if (selectedValue === 'All') {
                    table.column(3).search('').draw();
                } else {
                    table.column(3).search(selectedValue).draw();
                }
            });

        table.column(3).data().unique().sort().each(function (d, j) {
            select.append('<option value="' + d + '">' + d + '</option>');
        });

        select.before(totalElement);
        updateTotalAmount();
    });
</script>


@endsection
