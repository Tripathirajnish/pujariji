@extends('admin.layout.layouts')
@section('title','Pujari Ji || Event List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-content">
            <div class="d-flex justify-content-between">
                <h5 class="card-title p-3 pb-0 mb-1">Event List</h5>
                <a class="btn btn-primary p-2 me-4 mt-3 add" href="{{ url('create-event') }}"><i class="fa fa-plus"></i> Create Event</a>
            </div>
            <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead>
                            <tr class="text-nowrap">
                                <th>#</th>
                                <th>Image</th>
                                <th>Event</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>View More</th>
                                <th>Bookings</th>
                                <th>Facebook Link</th>
                                <th>Added On</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{-- <img src="{{ $value->event_img }}" class="rounded-circle" width="80px" height="80px" alt=""> --}}
                                    <div id="imageSlider{{ $value->id }}" class="carousel">
                                        <div class="carousel-inner">
                                            <?php foreach ($value->event_img as $index => $image): ?>
                                                <div class="carousel-item<?= $index === 0 ? ' active' : '' ?>">
                                                    <img src="<?= $image ?>" class="d-block w-100" width="90" alt="Image <?= $index + 1 ?>">
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <a class="carousel-control-prev" href="#imageSlider{{ $value->id }}" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#imageSlider{{ $value->id }}" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </td>
                                <td>{{ $value->title_eng }} <br>({{ $value->title_hin }})</td>
                                <td>₹{{ $value->price }}</td>
                                <td>{{ date('d-M-Y',strtotime($value->event_date)) }}</td>
                                <td><a href="javascript:void(0)" class="view_more" data-id="{{ $value->event_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal_more">View</a></td>
                                <td><a href="{{ url('event-booking',base64_encode($value->event_id)) }}">{{ $value->bookings }}</a></td>
                                <td class="p-0 m-0">
                                    @if($value->fb_link!=null)
                                        <small class="bg-primary text-white p-2">
                                            <a href="{{ $value->fb_link }}" class="text-white" target="_blank"><i class="fa fa-facebook-f"></i>acebook</a>
                                        </small>
                                    @else
                                        <button class="btn btn-info btn-sm update_link" data-id="{{ $value->event_id }}" data-bs-toggle="modal" data-bs-target="#exampleModal_update">Update Link</button>
                                    @endif
                                </td>
                                <td>{{ date('d-m-Y',strtotime($value->created_at)) }}</td>
                                <td class="text-nowrap">
                                    <a href="#" class="updateStatustoggle" data-url="{{ url('update_event') }}" data-id="{{ $value->event_id }}">
                                        @if($value->status=='0')
                                        <i class="fa fa-eye text-success"></i>
                                        @else
                                        <i class="fa fa-eye-slash text-danger"></i>
                                        @endif
                                    </a>
                                    <span class="mx-2">||</span>
                                    <a href="{{ url('edit-event',base64_encode($value->event_id)) }}"><i class="fa fa-edit text-info edit"></i></a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->event_id }}" data-url="{{ url('delete_event') }}"></i>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal_more" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="exampleModalLabel">Event Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <hr class="m-0 p-0">
        <div class="modal-body">
            <div class="row mb-3">
                <div class="col-12 fw-bold">Event Title</div>
                <div class="col-6 border"><span id="title_hindi"></span></div>
                <div class="col-6 border"><span id="title_english"></span></div>
                <hr class="m-0 p-0">
            </div>
            <div class="row mb-3">
                <div class="col-12 fw-bold">Event Decription</div>
                <div class="col-6 border"><span id="desc_hindi"></span></div>
                <div class="col-6 border"><span id="desc_english"></span></div>
                <hr class="m-0 p-0">
            </div>
            <div class="row mb-3">
                <div class="col-4 fw-bold">Event Price : </div>
                <div class="col-8 mb-1">₹<span id="event_price"></span></div>
                <hr class="m-0 p-0">
                <div class="col-4 fw-bold">Dakshina Price : </div>
                <div class="col-8 mb-1">₹<span id="dakshina_price"></span></div>
                <hr class="m-0 p-0">
                <div class="col-4 fw-bold">Guru Seva Price : </div>
                <div class="col-8 mb-1">₹<span id="guru_seva_price"></span></div>
                <hr class="m-0 p-0">
                <div class="col-4 fw-bold">Rudrakshseva Price : </div>
                <div class="col-8 mb-1">₹<span id="rudraksh_price"></span></div>
                <hr class="m-0 p-0">
                <div class="col-4 fw-bold">PrasadDelivery Price:</div>
                <div class="col-8 mb-1">₹<span id="prasad_delivery_price"></span></div>
                <hr class="m-0 p-0">
                <div class="col-4 fw-bold">FB Link : </div>
                <div class="col-8 mb-1"><a target="_blank" id="fb_link"></a></div>
                <hr class="m-0 p-0">
            </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal_update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Facebook Link</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ url('update-link') }}" method="post">
                @csrf
                <input type="hidden" name="event_id" id="update_event_id">
                <textarea name="facebook_link" class="form-control" id="" cols="30" rows="3" placeholder="Facebook Link..."></textarea>
                <button class="btn btn-primary mt-3 float-end" type="submit">Update</button>
            </form>
        </div>
      </div>
    </div>
  </div>


<script>
    $('.view_more').click(function () {
        var id = $(this).data('id');
        // Swal.fire({
        //     title: 'Fetching data...',
        //     allowOutsideClick: false,
        //     didOpen: () => {
        //         Swal.showLoading()
        //     }
        // });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('get_event_details') }}",
            data: { data: id },
            success: function (response) {
                $('#title_hindi').text(response.title_hin);
                $('#title_english').text(response.title_eng);
                $('#desc_hindi').text(response.desc_hin);
                $('#desc_english').text(response.desc_eng);
                $('#event_price').text(response.price);
                $('#dakshina_price').text(response.dakshina_price);
                $('#guru_seva_price').text(response.guruseva_price);
                $('#rudraksh_price').text(response.rudrakshseva_price);
                $('#prasad_delivery_price').text(response.prasaddelivery_price);
                $('#fb_link').text(response.fb_link);
                $('#fb_link').attr('href', response.fb_link);

                Swal.close();
            }
        });
    });


    $('.update_link').click(function () {
        var id = $(this).data('id');
        // Swal.fire({
        //     title: 'Fetching data...',
        //     allowOutsideClick: false,
        //     didOpen: () => {
        //         Swal.showLoading()
        //     }
        // });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "{{ url('get_event_details') }}",
            data: { data: id },
            success: function (response) {
                $('#update_event_id').val(response.event_id);
                Swal.close();
            }
        });
    })


</script>
@endsection
