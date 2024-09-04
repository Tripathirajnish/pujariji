<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="{{ url('assets/')}}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="description" content="Pujari Ji" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('assets/img/favicon/logo.ico')}}" />
    <script src="{{ url('assets/vendor/libs/jquery/jquery.js')}}"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('assets/css/demo.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/css/custom.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{ url('assets/vendor/libs/apex-charts/apex-charts.css')}}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include DataTables CSS and JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- Include jQuery UI for datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('assets/vendor/js/helpers.js')}}"></script>
    <script src="{{ url('assets/js/config.js')}}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the stored scroll position from local storage
            var storedScrollPosition = localStorage.getItem("pageScrollPosition");

            // If a scroll position is stored, set the page's scroll position
            if (storedScrollPosition) {
                window.scrollTo(0, parseInt(storedScrollPosition));
            }

            // Save the scroll position whenever the page is scrolled
            window.addEventListener("scroll", function() {
                var scrollPosition = window.scrollY;
                localStorage.setItem("pageScrollPosition", scrollPosition.toString());
            });
        });

    </script>

    <style>
        .table-design {
            border: 1px solid #ededed;
            border-top-left-radius: 50px !important;
            border-top-right-radius: 50px !important;
        }

        .table-design tr {
            border: 0px;
        }

        .table-design th {
            text-transform: capitalize !important;
            background-color: #f8fafd !important;
            border: 0px;
            color: #FF6300 !important;
            font-size: 14px !important;
        }

        .table-design td {
            background-color: #FFFFFF !important;
            border: 1px solid #ededed;
        }

    </style>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).ready(function() {
            $('#dataTable').DataTable({
                ordering: false
            });
        });


        // Update Status  ON / OFF
        $(document).ready(function() {
            $('body').on('click', '.updateStatustoggle', function() {
                var url = $(this).data('url');
                var id = $(this).data('id');
                var ths = $(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST"
                    , url: url
                    , data: {
                        data: id
                    }
                    , success: function(response) {
                        toastr.success('Status Updated Successfully');
                        ths.empty();
                        if (response === '1') {
                            ths.html("<i class='fa fa-eye-slash text-danger'></i>");
                        } else {
                            ths.html("<i class='fa fa-eye text-success'></i>");
                        }
                    }
                });
            });
        });


        // Delete Function
        $(document).ready(function() {
            $('body').on('click', '.delete_this', function() {
                var url = $(this).data('url');
                var id = $(this).data('id');
                var ths = $(this);
                Swal.fire({
                    title: 'Are you sure?'
                    , text: "You won't be able to revert this!"
                    , icon: 'warning'
                    , showCancelButton: true
                    , confirmButtonColor: '#3085d6'
                    , cancelButtonColor: '#d33'
                    , confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST"
                            , url: url
                            , data: {
                                data: id
                            }
                            , success: function(response) {
                                toastr.success('Deleted Successfully');
                                ths.closest('tr').remove();
                            }
                        });
                    }
                });
            });
        });

    </script>

</head>

<body>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success'
            , title: 'Successfull'
            , text: "{{ session('success') }}"
        , })

    </script>
    @endif
    @if(session('fail'))
    <script>
        Swal.fire({
            icon: 'error'
            , title: 'Oops...'
            , text: "{{ session('fail') }}"
        , })

    </script>
    @endif

    <script>
        $(document).ready(function() {
            $('.numericInput').on('input', function() {
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, ''); // Remove non-numeric characters
                var maxLength = parseInt($(this).attr('maxlength'), 10);

                if (numericValue.length > maxLength) {
                    numericValue = numericValue.slice(0, maxLength); // Truncate to maxlength
                }

                $(this).val(numericValue);
            });
        });

    </script>

    <script>
        $(document).ready(function() {
            $("#imageInput").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $("#imagePreview").attr("src", e.target.result).css("display", "block");
                    };
                    reader.readAsDataURL(file);
                }
            });
        });


        $(document).ready(function() {
            $("#temple-image").change(function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $("#temple-image-preview").attr("src", e.target.result).css("display", "block");
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

    </script>


    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layout.menu')
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('admin.layout.header')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper px-0" id="content-wrapper">
                    <!-- Content -->
                    <div class="container px-0 mx-0">
                        @yield('content')
                    </div>

                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin.layout.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{ url('assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{ url('assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{ url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{ url('assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{ url('assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{ url('assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
</body>

</html>
