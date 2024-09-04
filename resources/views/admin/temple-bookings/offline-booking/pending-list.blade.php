    @extends('admin.layout.layouts')
    @section('title','Offline Pending Pooja Booking List')
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
                <h5 class="m-0">Offline Pending Pooja Booking List</h5>
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
                            <td>Pooja Details</td>
                            {{-- <td>Status</td> --}}
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
                            <td>
                                <div class="d-flex justify-space-between">
                                    <div class="pt-2 pr-1"><img src="{{ temple_pooja_image($value->pooja_id) }}" width="50" height="50" class="rounded-circle" alt=""></div>
                                    <div class="pt-0 ms-1">
                                        <a href="#" class="text-nowrap details text-dark" title="View More">{{ temple_pooja_name($value->pooja_id)['eng_name'] }}</a><br>
                                        <span class="text-nowrap">
                                            <small class="small"><small class="fa fas fa-place-of-worship"></small>{{ $value->pooja_id }},</small>
                                            <small class="small">₹{{ $value->pooja_price }}</small><br>
                                            <small class="small">{{ date('d-M-Y',strtotime($value->pooja_date)) }} {{ date('h:i A',strtotime($value->pooja_time)) }}</small>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            {{-- <td>
                                        <span class="text-nowrap">
                                            <small class="small">{{$value->pujari_id}},</small>
                                            <small class="small">{{ pujari_number($value->pujari_id) }}</small><br>
                                            <small class="small">{{ $value->language }},</small>
                                            @if($value->request_status=='0')
                                            <small class="small text-success">Accepted</small>
                                            @else
                                            <small class="small text-warning">Pending</small>
                                            @endif
                                        </span>
                            </td> --}}
                            <td>
                                <div class="d-flex justify-space-between">
                                    <div class="pt-3 pr-1"><img src="{{ jajmaan_image($value->jajmaan_id) }}" class="rounded-circle" width="50" height="50" alt=""></div>
                                    <div class="pt-2 ms-1">
                                        <a href="#" class="text-nowrap details text-dark" title="View More">{{ jajmaan_name($value->jajmaan_id) }}</a><br>
                                        <span class="text-nowrap">
                                            <small class="small">{{ $value->jajmaan_id }},</small>
                                            <small class="small">{{ jajmaan_number($value->jajmaan_id) }}</small><br>
                                            <small class="small">Horoscope : {{ $value->horoscope }}</small>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td width="15%">
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
                            <td><button class="btn btn-primary btn-xs update_pujari_details" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-id="{{ $value->booking_id }}">Update</button></td>
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
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form action="{{ url('save-inclusion') }}" method="post" id="form_id">
            <div class="modal-body">
                @csrf
                <input type="hidden" name="inclusion_id">

                <div class="form-group mb-2">
                    <label for="name">Inclusion Name</label>
                    <input type="text" name="inclusion_name" value="{{ old('inclusion_name') }}" class="form-control" placeholder="Enter Inclusion Name" required>
                </div>
                <div class="form-group mb-2">
                    <label for="name">Inclusion Name Hinid</label>
                    <input type="text" name="inclusion_name_hindi" value="{{ old('inclusion_name_hindi') }}" class="form-control" placeholder="Enter Inclusion Name in Hindi" required>
                </div>
                <div class="form-group mb-2">
                    <label for="name">Inclusion Price</label>
                    <input type="text" name="inclusion_price" value="{{ old('inclusion_price') }}" class="form-control numericInput" placeholder="Enter Inclusion Price" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
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
            <form action="{{ url('update-temple-pujari-details') }}" method="post" enctype="multipart">
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
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('get-booking-details') }}",
                data: {data:id},
                success: function (response) {
                    $('#booking_id').val(id);
                    $('#pujariji_details').text(response.online_admin_info);
                }
            });
        });


        $('.add_new_inclusion').click(function(){
            $("#form_id")[0].reset();
            $('#exampleModalLabel').empty().text('Add New Inclusions');
        })
    </script>

    <script>
        $('.edit_inclusion').click(function(){
            $("#form_id")[0].reset();
            $('#exampleModalLabel').empty().text('Edit Inclusions');
            var id = $(this).data('id');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ url('get_inclusion') }}",
                data: {data:id},
                success: function (response) {
                    console.log(response);
                    $("input[name='inclusion_id']").val(response.inclusion_id);
                    $("select[name='package_id']").val(response.package_id);
                    $("input[name='inclusion_name']").val(response.name);
                    $("input[name='inclusion_name_hindi']").val(response.name_hindi);
                    $("input[name='inclusion_price']").val(response.price);
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

