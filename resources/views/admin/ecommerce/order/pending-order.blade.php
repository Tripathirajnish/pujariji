@extends('admin.layout.layouts')
@section('title','Pending Order')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    table tr th{
        color: #ffffff !important;
    }
</style>
<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Pending Order</h5>
            <span class="bg-light p-2 border shadow-sm p-3 mb-0 bg-light rounded">
                <input type="text" id="startDate" placeholder="Start Date" class="datePicker"/>
                <input type="text" id="endDate" placeholder="End Date" class="datePicker"/>
            </span>
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
            <form action="{{ url('add-ecom-post') }}" method="post">
                @csrf
                <table class="table table-bordered small" id="dataTable">
                    <thead class="small">
                        <tr class="bg-secondary small">
                            <th>SR</th>
                            <th>Order ID</th>
                            <th>Yajman</th>
                            <th>Contact</th>
                            <th class="text-nowrap mx-2"> Delivery Address </th>
                            <th>Product</th>
                            <th>Payment</th>
                            <th>Date</th>
                            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr class="">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->order_id }}</td>
                                <td>
                                    <p class="m-0 p-0 text-nowrap">
                                        <span>
                                            <label class="mx-1 fw-bold">Name:</label>{{ jajmaan_name($value->jajmaan_id) }}, <br>
                                            <label class="mx-1 fw-bold">ID:</label>{{ $value->jajmaan_id }}
                                        </span>
                                    </p>
                                </td>
                                <td>
                                    <p class="m-0 p-0 text-nowrap">
                                        <span>
                                            <label class="mx-1 fw-bold">Email:</label>{{ $value->del_email }}, <br>
                                            <label class="mx-1 fw-bold">Whats App:</label>{{ $value->del_whatsapp }}
                                        </span>
                                    </p>
                                </td>
                                <td style="width:100px">
                                    <p class="m-0 p-0">
                                        <span>
                                            <label class="mx-1 fw-bold">City:</label>{{ $value->del_city }}, <br>
                                            <label class="mx-1 fw-bold">Address:</label>{{ $value->del_address }}
                                        </span>
                                    </p>
                                </td>
                                <td><a href="#" class="view_product" data-id="{{ $value->order_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">View</a></td>
                                <td width="30%">
                                    <p class="m-0 p-0 text-nowrap">
                                        <span>
                                            <label class="mx-1 fw-bold">Delivery:</label>₹{{ $value->shipping_charge }}, <br>
                                            <label class="mx-1 fw-bold">Total:</label>₹{{ $value->total_amt }}<br>
                                            <small class="small text-wrap"><label class="fw-bold">ID :</label> {{ $value->transection_id }}</small>
                                        </span>
                                    </p>
                                </td>
                                <td class="text-nowrap">{{ date('Y-m-d',strtotime($value->order_date)) }}</td>
                                @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm update_status" data-id="{{ $value->order_id }}">Update</a>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>

    </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body table-responsive">
            <table class="table table-striped table" id="product_details">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>SR</th>
                        <th>Product ID</th>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
<script>
    $(document).ready(function () {
        $('.update_status').click(function() {
            var id = $(this).data('id');
            var ths = $(this);
            Swal.fire({
                title: 'Click Yes to Update?',
                text: "On Update Notification (Out for delivery) will be send to Jajmaan!",
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delivered!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                    $.ajax({
                        type: "POST",
                        url: "{{ url('update-order-complete') }}",
                        data: {data:id},
                        success: function (response) {
                            toastr.success('Updated Successfully');
                            ths.closest('tr').remove();
                        }
                    });
                }
            });
        });
    });


    $('.view_product').click(function(){
        var id = $(this).data('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('get-order-product') }}",
            data: {data:id},
            success: function (response) {
                console.log(response);
                $('#product_details tbody').empty();
                $.each(response, function (index, product) {
                    var newRow = '<tr>' +
                        '<td>' + (index + 1) + '</td>' +
                        '<td>' + product.product_id + '</td>' +
                        '<td>' + product.name_eng + '<br>' + product.name_hindi + '</td>' +
                        '<td>₹' + product.priduct_price + '</td>' +
                        '<td>' + product.quantity + '</td>' +
                        '<td>₹' + product.unit_price + '</td>' +
                        '</tr>';

                    $('#product_details tbody').append(newRow);
                });
            }
        });
    })
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


