@extends('admin.layout.layouts')
@section('title','Pooja Videos')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Pooja Videos</h5>
            @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
            <a class="btn btn-primary text-white add_new" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i> Add New Video</a>
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
            <table class="table table-sm table-hover" id="dataTable">
                <thead>
                    <tr class="small bg-secondary text-white">
                        <td>SN</td>
                        <td>Lang</td>
                        <td>Title</td>
                        <td>Video URL</td>
                        @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                        <td>Action</td>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($videos as $value)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $value->lang }} </td>
                            <td>{{ $value->title }}</td>
                            <td><iframe class="video-frame" src="https://www.youtube.com/embed/{{ $value->url }}" frameborder="0" allowfullscreen></iframe></td>
                            @if(session('type')==base64_encode('1') || session('type')==base64_encode('master_admin'))
                                <td class="text-nowrap">
                                    <div class="toggle-wrapper">
                                        <label class="toggle-switch">
                                            <input type="checkbox" class="toggle-status updateStatustoggle"  data-url="{{ url('update-pooja-video') }}" data-id="{{ $value->id }}" @if($value->status=='1') checked @endif>
                                            <span class="slider"></span>
                                        </label>
                                    </div>
                                    <span class="mx-2">||</span>
                                    <a href="javascript:void(0)" class="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $value->id }}"><i class="fa fa-edit text-info"></i></a>
                                    <span class="mx-2">||</span>
                                    <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete-pooja-video') }}"></i>
                                </td>
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
        <form action="{{ url('save-pooja-video') }}" method="post" id="form_id" enctype="multipart/form-data">
        <div class="modal-body">
            @csrf
            <input type="hidden" name="video_id">
            <div class="form-group mb-2">
                <label for="name">Language</label>
                <select name="lang" class="form-control" id="language" required="">
                    <option value="" selected="" disabled="">--Select Language--</option>
                    <option value="en">English</option>
                    <option value="hi">Hindi</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="name">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter Title" required>
            </div>
            <div class="form-group mb-2">
                <label for="name">Youtube Video ID</label>
                <input type="text" name="url" value="{{ old('url') }}" class="form-control" placeholder="Enter URL" required>
            </div>
            
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>



  <script>
    $('.add_new').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Add New Video');
    })
  </script>

  <script>
    $('.edit').click(function(){
        $("#form_id")[0].reset();
        $('#exampleModalLabel').empty().text('Edit Video');
        var id = $(this).data('id');
        var url = "{{ url('get-video-single') }}";
        $.ajax({
            type: "GET",
            url: url+'/'+id,
            success: function (response) {
                $("input[name='video_id']").val(response.id);
                $("#language").val(response.lang);
                $("input[name='title']").val(response.title);
                $("input[name='url']").val(response.url);
            }
        });
    })
  </script>
@endsection

