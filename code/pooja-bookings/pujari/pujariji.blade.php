@extends('admin.layout.layouts')
@section('title','Total PujariJi List')
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
                <h5 class="card-title p-3 pb-0 mb-1">Verified PujariJi List</h5>
                <div class="bg-light p-1">
                    <label class="fw-bold"> Apply Filters : </label>
                    <form action="{{ url('pujari_filter') }}" method="GET" class="d-inline">
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
                     <button type="button" class="btn btn-dark btn-sm" onclick="window.location='{{ url('pujariji-list') }}'">Clear Filters</button>
                 </div>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>PujariJi</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>State</th>
                                @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                                <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex justify-space-between">
                                            <div><img src="{{ $item->pujari_image ?: url('assets/img/no-image.png')  }}" class="img-responsive rounded-circle" width="50" height="50" alt=""></div>
                                            <div class="pt-2 ms-1">
                                                <a href="{{ url('pujariji-details',base64_encode($item->pujari_id)) }}" class="text-nowrap details" title="View More">{{ $item->name }} {{ $item->surname }}</a><br>
                                                <span class="text-nowrap">
                                                    <small class="small">{{ $item->pujari_id }}</small>
                                                    @if($item->gender=='0')
                                                    <small><i class="bx bx-male"></i></small>
                                                    @elseif($item->gender=='1')
                                                    <small><i class="bx bx-female"></i></small>
                                                    @else
                                                    <small><i class="fa fa-transgender"></i></small>
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="tel:{{ $item->phone_number }}" class="text-nowrap"><i class="bx bx-phone text-primary"></i> {{ $item->phone_number }}</a><br>
                                        <a href="https://wa.me/+91{{ $item->whatsapp_number }}" class="text-nowrap"><i class="fa fa-whatsapp text-success me-2 fs-5"></i> {{ $item->whatsapp_number }}</a>
                                    </td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->state }}</td>
                                    @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                                    <td>
                                        <a href="#" class="updateStatustoggle" data-url="{{ url('update_pujari') }}" data-id="{{ $item->pujari_id }}">
                                            @if($item->status=='0')
                                            <i class="fa fa-eye text-success"></i>
                                            @else
                                            <i class="fa fa-eye-slash text-danger"></i>
                                            @endif
                                        </a>
                                        @if(session('type')==base64_encode('master_admin'))
                                        <span class="mx-2">||</span>
                                        <a href="{{ url('pujariji-update-profile',base64_encode($item->pujari_id)) }}"><i class="fa fa-edit text-info"></i></a>
                                        <span class="mx-2">||</span>
                                        <i class="fa fa-trash text-danger delete_this" data-id="{{ $item->pujari_id }}" data-url="{{ url('delete_pujari') }}"></i>
                                        @endif
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
