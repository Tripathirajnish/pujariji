<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pujari Ji</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
.gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

background: linear-gradient(to right, #F86C2E, #5E1265);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
</head>
<body>
    <section class="h-50 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-50">
          <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                      <div class="text-center">
                        <img src="{{ url('assets/logo/logo.gif') }}" style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-5 pb-1 fw-bold">Master Login</h4>
                      </div>
                      @if(session()->has('message'))
                      <div class="text-danger small text-center py-2" role="alert">
                         {{ session()->get('message') }}
                       </div>
                       @endif
                      @if ($errors->any())
                          <div class="text-danger small py-2">
                              <ol>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ol>
                          </div>
                      @endif
                      <form class="user" action="{{ route('admin-login-verify') }}" method="POST">
                        @csrf
                        {{-- <p>Please login to your account</p> --}}

                        <div class="form-outline mb-4">
                          <input type="email" name="Email_Address" id="form2Example11" class="form-control"
                            placeholder="Email Address" />
                        </div>

                        <div class="form-outline mb-4">
                          <input type="password" name="Password" id="form2Example22" class="form-control" placeholder="**********" />
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                        </div>

                      </form>

                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">A Guide to Admin Responsibilities and Business Prosperity Through CRUD Operations</h4>
                      <p class="small mb-0">Unlock the full potential of your app and website as an admin! Dive into the world of CRUD operations and discover how effectively managing Create, Read, Update, and Delete tasks can elevate your business. This comprehensive guide not only outlines your key responsibilities but also wishes you good luck on your journey to business success. Master the art of CRUD and take control of your digital domain with confidence. Good luck, Admin</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Include Bootstrap JS and Popper.js for Bootstrap functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>
