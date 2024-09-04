@extends('admin.layout.layouts') @section('title','Send Notification to Jajmaan') @section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <!-- Your custom CSS -->

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Send Notification to Yajmaan</h5>
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
            <div class="container">
                <form action="{{ url('send-bulk-notification-post') }}" method="post">
                    @csrf
                    <div class="form-group my-4">
                        <label for="notificationTitle fw-bold">Notification Title:</label>
                        <input type="text" name="title" class="form-control" id="notificationTitle" placeholder="Enter title" />
                    </div>

                    <div class="form-group mb-4">
                        <label for="notificationBody fw-bold">Notification Body:</label>
                        <textarea class="form-control" id="notificationBody" rows="3" name="body" placeholder="Enter body"></textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label for="userSelect fw-bold">Select Yajman:</label>
                        <select class="form-control js-example-basic-multiple" id="userSelect" name="sender_id[]" multiple="multiple">
                            <option value="all">Select All</option>
                            @foreach ($data as $key => $item)
                                <option value="{{ $key }}">{{ ucwords($item) }} ({{ $key }})</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send Notification
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    // Initialize Select2
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();

        // Add change event listener for "Select All" option
        $('#userSelect').on('change', function() {
            if ($(this).val() && $(this).val().includes('all')) {
                // If "Select All" is selected, select all other options
                $(this).val([...$(this).children().map(function() {
                    return this.value !== 'all' ? this.value : null;
                })]).trigger('change');
            }
        });
    });

    function sendNotification() {
        var title = $('#notificationTitle').val();
        var body = $('#notificationBody').val();
        var selectedUsers = $('#userSelect').val();

        // Add your logic to send the notification here
        console.log('Title:', title);
        console.log('Body:', body);
        console.log('Selected Users:', selectedUsers);
    }
</script>

@endsection
