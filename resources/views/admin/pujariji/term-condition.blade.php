@extends('admin.layout.layouts')
@section('title','Update Term & Conditions')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Update Term & Conditions</h5>
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

        <div class="card-body">
            <form action="{{ url('update-tc-post') }}" method="post">
            @csrf
                <div class="form-control">
                    <textarea id="editor" name="tc_content" cols="30" rows="15" class="form-control" placeholder="Term & Conditions">{{ $data->tc_content }}</textarea>
                    <div class="d-flex justify-content-center p-3">
                        <button class="btn btn-primary" type="submit">Update Term & Conditions</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>




  <script>
CKEDITOR.plugins.addExternal('/ckeditor/plugins', 'plugin.js' );
CKEDITOR.replace('editor');
  </script>

@endsection

