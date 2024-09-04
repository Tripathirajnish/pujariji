@extends('admin.layout.layouts')
@section('title','Product List')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
    .ckeditor-read-only {
        border: none;
        overflow: hidden;
        outline: none;
        resize: none;
    }

    .cke_top, .cke_bottom {
        display: none !important;
    }
</style>
<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Product List</h5>
            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
            <a href="{{ url('add-products') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New Product</a>
            @endif
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
                        <td>Thumbnail Image</td>
                        <td>Slider Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td width="15%">Description</td>
                        <td width="15%">Description Hindi</td>
                        <td>Bookings</td>
                        @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                        <td>Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $value)
                        <tr class="small">
                            <td width="15%">
                                <div class="d-flex justify-space-between small text-wrap">
                                    <div><img src="{{ $value->thumbnail_image ?: url('assets/img/no-image.png')  }}" class="img-responsive rounded" width="90" height="90" alt=""></div>
                                </div>
                            </td>
                            <td width="15%">
                                <div id="imageSlider{{ $value->id }}" class="carousel">
                                    <div class="carousel-inner">
                                        <?php foreach ($value->productImagesWithUrl as $index => $image): ?>
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
                            <td><span class="text-nowrap">{{ $value->name_eng }}</span><br><span class="text-nowrap">{{ $value->name_hindi }}</span></td>
                            <td>₹{{ $value->price }}</td>
                            <td><textarea class="d-inline-block text-truncate ckeditor-read-only d-none" style="max-width: 200px;" id="editor{{ $value->id }}">{{ $value->desc_eng }}</textarea></td>
                            <td><textarea class="d-inline-block text-truncate ckeditor-read-only d-none" style="max-width: 200px;" id="editor1{{ $value->id }}">{{ $value->desc_hindi }}</textarea></td>
                            <td>0</td>
                            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                            <td width="15%" class="text-nowrap">
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update_ecom_product') }}" data-id="{{ $value->product_id }}">
                                    @if($value->product_status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <a href="{{ url('edit-products',base64_encode($value->product_id)) }}"><i class="fa fa-edit text-info"></i></a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->product_id }}" data-url="{{ url('delete_ecom_product') }}"></i>
                            </td>
                            @endif
                        </tr>
<script>
    CKEDITOR.inline( 'editor{{ $value->id }}', {
        removePlugins: 'toolbar'
    } );
    CKEDITOR.inline( 'editor1{{ $value->id }}', {
        removePlugins: 'toolbar'
    } );
</script>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection
