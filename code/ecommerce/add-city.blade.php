@extends('admin.layout.layouts')
@section('title','Add New City')
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
            <h5 class="m-0">Add New City</h5>
            <a href="{{ url('add-new-city') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New City</a>
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
                <table class="table table-bordered" id="dataTable">
                    <thead>
                        <tr class="bg-secondary">
                            <td>SR</td>
                            <td>City</td>
                            <td>Add</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td><input type="checkbox add_city" name="city[]" value="{{ $value->name }}"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>

    </div>
</div>

<script>
    $(document).ready(function () {
        $('.add_city').click(function() {
            var id = $(this).data('id');
            var ths = $(this);
            Swal.fire({
                title: 'Click Ok to Add?',
                text: "This City will be visible in shipping cities!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Add this!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "{{ url('add_city_post') }}",
                        data: {data:id},
                        success: function (response) {
                            toastr.success('Added Successfully');
                            ths.closest('tr').remove();
                        }
                    });
                }
            });
        });
    });
</script>


@endsection


