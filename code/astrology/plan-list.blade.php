@extends('admin.layout.layouts')
@section('title','Astrology Plan List')
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
                <h5 class="card-title p-3 pb-0 mb-1">Astrology Plan List</h5>
                <a href="{{ url('store-plan') }}" class="btn btn-primary text-white"><i class="fa fa-plus"></i> Add Plan</a>
             </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>id</th>
                                <th>Plan ID</th>
                                <th>Plan</th>
                                <th>Subtitle</th>
                                <th>Decription</th>
                                <th>Features</th>
                                <th>MRP</th>
                                <th>Discount</th>
                                <th>Price</th>
                                <th>Talk Time</th>
                                <th>Created Date</th>
                                <th>Bookings</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key=>$value)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $value->plan_id }}</td>
                                    <td>{{ $value->plan_name }}</td>
                                    <td>{{ $value->sutitle }}</td>
                                    <td>{{ $value->description }}</td>
                                    <td>{{ implode(', ', array_map('strval', unserialize($value->features))) }}</td>
                                    <td>₹{{ $value->mrp }}</td>
                                    <td>{{ $value->disscount_per }}%</td>
                                    <td>₹{{ $value->price }}</td>
                                    <td>{{ $value->talk_time }} min</td>
                                    <td>{{ date('d-m-Y',strtotime($value->created_at)) }}</td>
                                    <td>{{total_astro_plan_bookings($value->plan_id)}}</td>
                                    <td class="text-nowrap">
                                        <a href="#" class="updateStatustoggle" data-url="{{ url('update_plan') }}" data-id="{{ $value->plan_id }}">
                                            @if($value->status=='0')
                                            <i class="fa fa-eye text-success"></i>
                                            @else
                                            <i class="fa fa-eye-slash text-danger"></i>
                                            @endif
                                        </a>
                                        <span class="mx-2">||</span>
                                        <a href="{{ url('edit-plan',base64_encode($value->plan_id)) }}"><i class="fa fa-edit text-info edit" data-url="{{ $value->plan_id }}"></i></a>
                                        <span class="mx-2">||</span>
                                        <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->plan_id }}" data-url="{{ url('delete_plan') }}"></i>
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


@endsection
