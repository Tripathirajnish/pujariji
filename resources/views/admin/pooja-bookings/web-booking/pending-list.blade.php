    @extends('admin.layout.layouts')
    @section('title','Web Pending Pooja Booking List')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        label{
            font-weight: 900;
        }
    </style>
    <div class="container">
        <div class="card m-3 mb-0">
            <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
                <h5 class="m-0">Virtual Pooja Booking List</h5>
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
                <table class="table table-sm table-hover small" id="dataTable">
                    <thead>
                        <tr class="small bg-secondary text-white text-center">
                            <td>Booking ID</td>
                            <td style="width:20%;">Pooja Details</td>
                            <td>Pujari Details</td>
                            <td>Yajman Details</td>
                            <td>Payment Details</td>
                            <td>Address</td>
                            {{-- <td>State</td> --}}
                            <td>Booked On</td>
                            @if(session('type')==base64_encode('master_admin'))
                            <td>Update PujariJi</td>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value)
                        <tr>
                            <td class="small">{{ $value->booking_id }}</td>
                            <td style="width:20%;">
                                <div class="d-flex justify-space-between">
                                    <div class="pt-2 pr-1"><img src="{{ virtual_pooja_image($value->pooja_id) }}" width="50" height="50" class="rounded-circle" alt=""></div>
                                    <div class="pt-0 ms-1">
                                        <a href="#" class="text-nowrap details pooja_details" data-id="{{ $value->booking_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ virtual_pooja_name($value->pooja_id)['eng_name'] }}</a><br>
                                        <span class="text-nowrap">
                                            <small class="small">₹{{ $value->pooja_price }}</small><br>
                                            <small class="small">{{ date('d-M-Y',strtotime($value->pooja_date)) }} {{ date('h:i A',strtotime($value->pooja_time)) }}</small>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-space-between">
                                    <div class="pt-0 ms-1">
                                        <span class="text-wrap"> {{ $value->online_admin_info }}</span><br>
                                        <span class="text-nowrap">
                                            @if(!is_null($value->online_admin_info))
                                            <small class="small text-success">Complete</small>
                                            @else
                                            <small class="small text-warning">Pending</small>
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-space-between">
                                    <div class="pt-3 pr-1"><img src="{{ jajmaan_image($value->jajmaan_id) }}" class="rounded-circle" width="50" height="50" alt=""></div>
                                    <div class="pt-2 ms-1">
                                        <a href="#" class="text-nowrap details text-dark" title="View More">{{ virtual_jajmaan_name($value->jajmaan_id) }}</a><br>
                                        <span class="text-nowrap">
                                            <small class="small">{{ virtual_jajmaan_number($value->jajmaan_id) }}</small>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-space-between">
                                    <div class="pt-2 ms-1">
                                        <a href="javascript:void()" class="text-nowrap details text-dark" title="View More">Total : ₹{{ $value->total_price }}</a>,
                                        <small class="small"><label>Type :</label> @if($value->payment_type=='0') Full @else Partial @endif</small><br>
                                        <span class="text-nowrap">
                                            <small class="small"><label>Paid :</label> ₹{{ $value->advance }},</small>
                                            <small class="small"><label>Pending :</label> ₹{{ $value->balance }}</small><br>
                                            <small class="small"><label>ID :</label> {{ $value->transection_id }}</small>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $value->location }}</td>
                            {{-- <td>{{ $value->state }}</td> --}}
                            <td>{{ date('Y-m-d',strtotime($value->created_at)) }}</td>
                            @if(session('type')==base64_encode('master_admin'))
                              <td><button class="btn btn-primary btn-xs update_pujari_details" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-id="{{ $value->booking_id }}">Update</button>
                              <button   class="btn btn-success btn-xs pooja_details" data-id="{{ $value->booking_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Pooja Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <hr class="m-0 p-0">
            <div class="modal-body row">
                <div class="col-12 bg-light">
                    <h6>Pakcage Details</h6>
                </div>
                <div class="col-1"></div>
                <div class="col-3 text-muted fw-bold mb-1 border-bottom">Package ID</div>
                <div class="col-7 border-bottom mb-1" id="package_id"></div>
                <div class="col-1"></div>

                <div class="col-1"></div>
                <div class="col-3 text-muted fw-bold mb-1 border-bottom">Package</div>
                <div class="col-7 border-bottom mb-1" id="package"></div>
                <div class="col-1"></div>

                <div class="col-1"></div>
                <div class="col-3 text-muted fw-bold mb-1 border-bottom">Package Price</div>
                <div class="col-7 border-bottom mb-1" id="package_price"></div>
                <div class="col-1"></div>

                <div class="table-responsive">
                    <div class="col-12 mt-3 bg-light">
                        <h6>Inclusion Details</h6>
                    </div>
                    <table class="table mt-0" id="inclusionsTable">
                        <thead>
                            <tr>
                                <th>Inclusion ID</th>
                                <th>Inclusion </th>
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
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Pujari ji Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div><hr class="m-0 p-0">
        <div class="modal-body">
            <form action="{{ url('web-complete-puja') }}" method="post" enctype="multipart">
                @csrf
                <input type="hidden" id="booking_id" name="booking_id">
                <textarea name="pujariji_details" id="pujariji_details" class="form-control" id="" cols="30" rows="3" required></textarea>
                <small class="text-muted my-2 d-block">On Update Details Pooja will be completed</small>
                <div class="float-end">
                    <button class="btn btn-primary" type="submit">Update & Complete Pooja</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

<script>
    $('.update_pujari_details').click(function(){
        var id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: "{{ url('virtual-get-booking-details') }}",
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            data: {data:id},
            success: function (response) {
                $('#booking_id').val(id);
                $('#pujariji_details').text(response.online_admin_info);
            }
        });

    });


    $('.set_data_id').click(function(){
            var id = $(this).data('id');
            $("input[name='booking_id']").val(id);
        });

        $('.pooja_details').click(function(){
            var id = $(this).data('id');
            $('#package_id').empty();
            $('#package').empty();
            $('#package_price').empty();
            $('#inclusionsTable tbody').empty();
            $.ajax({
                type: "POST",
                url: "{{ url('get_pooja_package_inclusion_detail') }}",
                headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
                data: {data:id},
                success: function (response) {
                    $('#package_id').text(response.package_id);
                    $('#package').text(response.package_name);
                    $('#package_price').text(response.price);
                    $.each(response.inclusions, function (index, inclusion) {
                        $('#inclusionsTable tbody').append(`
                            <tr>
                                <td>${inclusion.inclusion_id}</td>
                                <td>${inclusion.inclusion_name}</td>
                                <td>${inclusion.inclusion_price}</td>
                            </tr>
                        `);
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

