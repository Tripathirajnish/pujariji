@extends('admin.layout.layouts')
@section('title','Temple Pooja List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Temple Pooja List</h5>
            <a href="{{ url('add-new-temple-pooja') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Pooja</a>
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
            <table class="table table-sm table-hover">
                <thead>
                    <tr class="small bg-secondary text-white">
                        <td class="text-center fw-bold">Pooja</td>
                        <td>Temple</td>
                        <td>Max Price</td>
                        <td>Min Price</td>
                        <td width="15%">Description</td>
                        <td width="15%">Description Hindi</td>
                        <td>Bookings</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr class="small">
                            <td width="15%">
                                <div class="d-flex justify-space-between small text-wrap">
                                    <div><img src="{{ $value->image }}" class="img-responsive rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="pt-2 ms-1">
                                        <a href="#" class="text-nowrap details" data-id="{{ $value->pooja_id }}" data-bs-toggle="modal" data-bs-target="#flipInXAnimationModal" title="View More">{{ $value->name }} ({{ $value->name_hindi }})</a><br>
                                        <span class="text-nowrap">
                                            <small class="small me-2">{{ $value->pooja_id }}</small>
                                            <i class="fa fa-clock"></i>
                                            <small class="small">{{ date('d-F-y',strtotime($value->date)) }}</small>

                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>{{ temple_name($value->temple_id)['eng_name'] }}</td>
                            <td>{{ $value->max_price }}</td>
                            <td>{{ $value->min_price }}</td>
                            <td><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="view_description" data-url="{{ url('gettemplepoojadetails') }}" data-id="{{ $value->pooja_id }}">View</a></td>
                            <!-- <td><p class="d-inline-block">{{ $value->description }}</p></td>
                            <td><p class="d-inline-block">{{ $value->description_hindi }}</p></td> -->
                            <td>0</td>
                            <td width="15%">
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update-temple-pooja') }}" data-id="{{ $value->pooja_id }}">
                                    @if($value->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="{{ url('edit-temple-pooja',base64_encode($value->pooja_id)) }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->pooja_id }}" data-url="{{ url('delete-temple-pooja') }}"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Description</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <label for="english" class="fw-bold">English Description</label>
            <p id="english" class=" border p-2"></p>
            <label for="hindi" class="fw-bold">Hindi Description</label>
            <p id="hindi" class=" border mb-3 p-2"></p>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>

<script>
    // Description
    $(document).ready(function () {
        $('body').on('click', '.view_description', function() {
            var url = $(this).data('url');
            var id = $(this).data('id');
            var ths = $(this);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: url,
                data: { data: id },
                success: function (response) {
                    $('#hindi').html(response.description_hindi);
                    $('#english').html(response.description);
                }
            });
        });
    });
</script>
@endsection
