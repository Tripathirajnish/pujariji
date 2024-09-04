@extends('admin.layout.layouts')
@section('title','Astrologer Pending Requests')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table th {
        font-size: 11px !important;
        padding: 1 !important;
    }

    table td {
        font-size: 11px !important;
        padding: 1 !important;
    }

</style>
@php
    $states = DB::table('pujari_state')->where('status','0')->orderBy('state','asc')->get();
    $cities = DB::table('pujari_city')->where('status','0')->orderBy('city','asc')->get();
@endphp

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
                <h5 class="card-title p-3 pb-0 mb-1">Astrologer Pending List</h5>
                {{-- <div class="bg-light p-1">
                    <label class="fw-bold"> Apply Filters : </label>
                    <form action="{{ url('jajmaan_filter') }}" method="GET" class="d-inline">
                     <select name="state" class="form-control-sm" id="state">
                         <option value="" disabled selected>State Filter</option>
                         @foreach ($states as $item)
                             <option value="{{ $item->state }}" @isset($state) @if($state==$item->state) selected @endif @endisset>{{ $item->state }}({{ $item->state_hindi }})</option>
                         @endforeach
                     </select>
                     <select name="city" class="form-control-sm" id="city" onchange="this.form.submit()">
                         <option value="" disabled selected>City Filter</option>
                         @foreach ($cities as $city)
                             <option value="{{ $city->city }}" @isset($filter_city) @if($filter_city==$city->city) selected @endif @endisset>{{ $city->city }}({{ $city->city_hindi }})</option>
                         @endforeach
                     </select>
                     </form>
                     <button type="button" class="btn btn-dark btn-sm" onclick="window.location='{{ url('jajmaan') }}'">Clear Filters</button>
                 </div> --}}
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>Astrologer</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Requested Price</th>
                                <th>Requested Date</th>
                                @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($astro as $key => $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex justify-space-between">
                                            <div><img src="{{ $data->astro_image }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                            <div class="pt-2 ms-1">
                                                <a href="{{ url('astrologer-details',base64_encode($data->astro_id)) }}" class="text-nowrap details" title="View More">{{ $data->astro_name }} {{ $data->astro_surname }}</a><br>
                                                <span class="text-nowrap">
                                                    <small class="small">{{ $data->astro_id }}</small>
                                                    @if($data->astro_gender=='0')
                                                    <small><i class="bx bx-male"></i></small>
                                                    @elseif($data->astro_gender=='1')
                                                    <small><i class="bx bx-female"></i></small>
                                                    @else
                                                    <small><i class="fa fa-transgender"></i></small>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $data->astro_phone }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $data->astro_phone }}</a><br>
                                        <a href="https://wa.me/+91{{ $data->astro_whatsapp }}" class="text-nowrap"><i class="fa fa-whatsapp text-success me-2 fs-5"></i> {{ $data->astro_whatsapp }}</a>
                                    </td>
                                    <td>{{ $data->astro_city }}</td>
                                    <td>{{ $data->astro_state }}</td>
                                    <td>₹{{ $data->astro_price }}</td>
                                    <td>{{ date('d-m-Y',strtotime($data->created_at)) }}</td>
                                    @if(session('type')==base64_encode('3') || session('type')==base64_encode('master_admin'))
                                    <td>
                                        <button class="badge bg-success border-0 verify" data-price="{{ $data->astro_price }}" data-id="{{ base64_encode($data->astro_id) }}" data-bs-toggle="modal" data-bs-target="#exampleModal">Verify</button>
                                        <span class="px-3">||</span>
                                        <button class="badge bg-danger border-0 reject_astrologer"  data-id="{{ base64_encode($data->astro_id) }}">Reject</button>
                                    </td>
                                    @endif
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
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel ">Verify Astrologer</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('verify_astro') }}" method="post">
            @csrf
            <div class="modal-body">
                <p>Requested Price : <span id="requested_price"></span></p>
                <p>
                    <span>Set Final Price</span>
                    <input type="hidden" name="astro_id" id="astro_ids">
                    <input type="text" name="final_price" class="form-control numericInput" id="final_price" placeholder="Final Price" required>
                </p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Verify Astrologer</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function () {
        $('.verify').click(function(){
            $('#requested_price').html($(this).data('price'));
            $('#astro_ids').val($(this).data('id'));
        });
    });



    $('.reject_astrologer').click(function(){
        var id = $(this).attr("data-id");
        var ths = $(this);
        Swal.fire({
            title: "Are you sure?",
            text: "Do You want to Reject!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Reject!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{ url('reject_astro') }}",
                    data: {data:id},
                    success: function (response) {
                        toastr.success('Rejected Successfully');
                        ths.closest('tr').remove();
                    }
                });
            }
        });
    });

  </script>
@endsection
