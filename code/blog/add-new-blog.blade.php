@extends('admin.layout.layouts')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container m-0 p-0">
        <div class="card m-0 p-0">
            <div class="card-header d-flex justify-content-between">
                <h5 class="fw-bold">Add New Blog</h5>
            </div>
            <div class="card-body">
                {{-- Blog Form --}}
                <form action="{{ url('save-new-blog') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Blog Title</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Blog Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Blog Description</label>
                        <textarea name="description" id="description" rows="6" class="form-control" required></textarea>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                {{-- End Blog Form --}}
            </div>
        </div>
    </div>
</div>

@endsection
