@extends('admin.layout.layouts')
@section('content')
@section('title','Pending Blog')

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container m-0 p-0">
        <div class="card m-0 p-0">
            <div class="card-header d-flex justify-content-between">
            <div class="fw-bold">Pending Blog List</div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-sm small table-hover" id="dataTable">
                    <thead>
                        <tr class="small">
                            <th>#</th>
                            <th>Blog ID</th>
                            <th>Posted By</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            @if(session('type')==base64_encode('3') || session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->blog_id }}</td>
                            <td>
                                {{ get_vendor_name($blog->added_by)['name'] }}<br>
                                <small>{{ $blog->added_by }}</small><br>{{ get_vendor_name($blog->added_by)['type'] }}
                            </td>
                            <td><img src="{{$blog->blog_image}}" width="50px" height="50px"></td>
                            <td>{{ $blog->title }}</td>
                            <td><a href="javascript:void(0);" class="view_desc" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $blog->blog_id }}">View</a></td>
                            <td>{{ date('d-m-Y',strtotime($blog->created_at)) }}</td>
                            @if(session('type')==base64_encode('3') || session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                            <td>
                                <a class="approve_this" data-url="{{ url('approve_blog') }}" data-id="{{ $blog->blog_id }}"><i class="fa fa-check-circle text-success"></i></a>
                                {{-- <span class="mx-2">||</span>
                                <i class="fa fa-edit text-info"></i> --}}
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $blog->blog_id }}" data-url="{{ url('delete_blog') }}"></i>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{{-- !Content --}}
</div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Blog Description</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div><hr class="m-0 p-0">
        <div class="modal-body">
            <h5 id="title"></h5><hr class="m-0 p-0">
            <p class="text-justify" id="description"></p>
        </div>
      </div>
    </div>
  </div>



<script>

    $('.view_desc').click(function(){
        $('#description').empty();
        $('#title').empty();
        var id = $(this).data('id');
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        $.ajax({
            type: "POST",
            url: "{{ url('get_blog') }}",
            data: {data:id},
            success: function (response) {
                $('#title').text(response.title);
                $('#description').text(response.description);
            }
        });
    })

    // Delete Function
    $(document).ready(function () {
        $('.approve_this').click(function() {
            var url = $(this).data('url');
            var id = $(this).data('id');
            var ths = $(this);
            Swal.fire({
                title: 'Are you sure?',
                text: "Verify this blog!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {data:id},
                        success: function (response) {
                            toastr.success('Approved Successfully');
                            ths.closest('tr').remove();
                        }
                    });
                }
            });
        });
    });

</script>
@endsection
