@extends('admin.layout.layouts')
@section('title','Update Pooja Details')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="card m-3 mb-0">
        <div class="card-header fw-bold bg-light mb-0 d-flex justify-content-between">
            <h5 class="m-0">Update Puja Details</h5>
            <a href="{{ url('virtual-pooja-list') }}" class="btn btn-primary"><i class="fa fa-list"></i> Pooja List</a>
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

       
            
            <div class="card-body row">

                <div class="col-12">
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-basic" aria-controls="navs-justified-basic" aria-selected="false" tabindex="-1">
                          <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block">Basic Details</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="false" tabindex="-1">
                          <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block">About Puja</span>
                        </button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-benefits" aria-controls="navs-justified-benefits" aria-selected="false" tabindex="-1">
                          <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block">Benefits</span>
                        </button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-process" aria-controls="navs-justified-process" aria-selected="false" tabindex="-1">
                          <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block">Process</span>
                        </button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-mandir" aria-controls="navs-justified-mandir" aria-selected="false" tabindex="-1">
                          <i class="tf-icons bx bx-home me-1"></i><span class="d-none d-sm-block">Mandir Details</span>
                        </button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false" tabindex="-1">
                          <i class="tf-icons bx bx-user me-1"></i><span class="d-none d-sm-block">Packages</span>
                        </button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="true">
                          <i class="tf-icons bx bx-message-square me-1"></i><span class="d-none d-sm-block">Extra Images</span>
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">

                    <div class="tab-pane fade" id="navs-justified-basic" role="tabpanel">
                      <form action="{{ route('savePoojaBasic') }}" class="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-3 mb-3">
                                <label for="name">Pooja Category</label>
                                <select name="pooja_category" class="form-control" id="pooja_category" required>
                                    <option value="" selected disabled>--Select Pooja Category--</option>
                                    @foreach ($categories as $value)
                                        <option value="{{ $value->cat_id }}" @if($pooja->category_id==$value->cat_id) selected @endif>{{ $value->cat_name }}({{ $value->cat_name_hindi }})>{{ $value->cat_name }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="pooja_id" value="{{$pooja->id}}" />
                            </div>

                            <div class="col-3 mb-3">
                                <label for="name">Puja date</label>
                                <input type="date" name="puja_date" value="{{ input_value($pooja->date,old('pooja_date')) }}" class="form-control" placeholder="Puja Date">
                            </div>
                        

                            <div class="col-3 mb-3">
                                <label for="name">Booking End Date</label>
                                <input type="datetime-local" name="booking_end_date" value="{{ input_value($pooja->booking_end_date,old('booking_end_date')) }}" class="form-control" id="booking-end-date" placeholder="Select Booking End Date">
                            </div>

                            <div class="col-3 mb-3">
                                <label for="name">Fake Booking Count</label>
                                <input type="number" name="booking_count" value="{{ input_value($pooja->booking_count,old('booking_count')) }}" class="form-control" placeholder="Booking Count">
                            </div>


                            <div class="col-3 mb-3">
                                <label for="name">Pooja Thumb Image</label>
                                <input type="file" name="selected_image" class="form-control" id="imageInput">
                            </div>
                            <div class="col-3 m-0 p-0">
                                <img class="p-1" height="150" id="imagePreview" alt="">
                                @if($pooja->image)
                                <img class="p-1" src="{{ $pooja->image }}" height="150" alt="">
                                @endif
                            </div>


                            <div class="col-3 mb-3">
                                <label for="name">Temple Image</label>
                                <input type="file" name="temple_image" class="form-control" id="temple-image">
                            </div>
                            <div class="col-3 m-0 p-0">
                                <img class="p-1" height="150" id="temple-image-preview" alt="">
                                @if($pooja->temple_image)
                                <img class="p-1" src="{{ $pooja->temple_image }}" height="150" alt="">
                                @endif
                            </div>

                            
            
                            <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary p-3" type="submit" name="save_pooja">Save</button>
                            </div>
                        </div>
                      </form>

                      </div>
                      <div class="tab-pane fade active show" id="navs-justified-home" role="tabpanel">
                       <form action="{{ route('savePoojaDetail') }}" class="" id="puja-detail-form"  method="POST" >
                       @csrf
                        <div class="row">
                           <div class="col-2 mb-3">
                                <label for="name">Language</label>
                                <select name="lang" class="form-control" id="detail-language" required>
                                    <option value="" selected disabled>--Select Language--</option>
                                    <option value="en">English</option>
                                    <option value="hi">Hindi</option>
                                </select>
                                <input type="hidden" name="pooja_id" value="{{$pooja->id}}" />
                                <input type="hidden" name="puja_detail_id" value="" />
                            </div>
                            <div class="col-8 mb-3">
                                <label for="name">Pooja Name</label>
                                <input type="text" id="detail-puja-name" name="pooja_name" class="form-control" id="" value="{{ input_value($pooja->name,old('pooja_name')) }}" placeholder="Enter Pooja Name">
                            </div>

                            <div class="col-6 mb-3">
                                <label for="name">Pooja Purpose</label>
                                <input type="text" id="detail-puja-purpose" name="pooja_purpose" class="form-control" id="" value="{{ old('pooja_purpose') }}" placeholder="Enter Pooja Purpose">
                            </div>

                            <div class="col-6 mb-3">
                                <label for="name">Pooja Tithi Name</label>
                                <input type="text" id="detail-tithi-name" name="pooja_tithi" class="form-control" id="" value="{{ old('pooja_tithi') }}" placeholder="Enter Tithi Name">
                            </div>

                            <div class="col-12 mb-3">
                                <label for="name">Description</label>
                                <textarea id="detail-puja-description" name="pooja_description" rows="6" class="form-control" id="" placeholder="Enter Pooja Description">{{ input_value($pooja->description,old('pooja_description')) }}</textarea>
                            </div>

                            <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary p-3" type="submit" name="puja_detail">Save</button>
                            </div>

                            </div>
                            </form>
                            <h5 class="card-header">Details List</h5>    
                            <div class="row table-responsive">
                              <table class="table table-sm table-hover" id="dataTable" style="width: 100%;">
                                  <thead>
                                      <tr class="small bg-secondary text-white">
                                          <td>SN</td>
                                          <td>Lang</td>
                                          <td>Name</td>
                                          <td>Purpose</td>
                                          <td>Tithi</td>
                                          <td>Description</td>
                                          @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                          <td>Action</td>
                                          @endif
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($detail as $key => $value)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $value->lang }}</td>
                                              <td>{{ $value->name }}</td>
                                              <td>{{ $value->purpose }}</td>
                                              <td>{{ $value->tithi_name }}</td>
                                              <td>{{ $value->description }}</td>
                                              @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                              <td>
                                                  <a href="#" data-id="{{ $value->id }}" class="edit-detail-pooja"><i class="fa fa-edit text-info"></i></a>
                                                  <span class="mx-2">||</span>
                                                  <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->id }}"  data-url="{{ url('delete-pooja-detail') }}"></i>
                                              </td>
                                              @endif
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>

                      <div class="tab-pane fade" id="navs-justified-benefits" role="tabpanel">
                       <form action="{{ route('savePoojaBenefit') }}"  id="puja-benefit-form" class="" method="POST">
                       @csrf
                        <div class="row">
                           
                           <div class="col-2 mb-3">
                                <label for="name">Language</label>
                                <select name="lang" class="form-control" id="benefit-language" required>
                                    <option value="" selected disabled>--Select Language--</option>
                                    <option value="en">English</option>
                                    <option value="hi">Hindi</option>
                                </select>
                                <input type="hidden" name="pooja_id" value="{{$pooja->id}}" />
                                <input type="hidden" name="puja_benefit_id" value="" />
                            </div>
                            <div class="col-8 mb-3">
                                <label for="name">Title</label>
                                <input type="text" id="benefit-title" name="title" class="form-control" id="" value="{{ input_value($pooja->title,old('title')) }}" placeholder="Enter Benefit Title">
                            </div>


                            <div class="col-12 mb-3">
                                <label for="name">Description</label>
                                <textarea name="description" id="benefit-description" rows="6" class="form-control" id="" placeholder="Enter Benefit Description">{{ input_value($pooja->description,old('description')) }}</textarea>
                            </div>

                            <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary p-3" type="submit" name="save_benefit">Save</button>
                            </div>

                            </div>
                            </form>

                            <h5 class="card-header">Benefit List</h5>    
                            <div class="row table-responsive">
                              <table class="table table-sm table-hover" id="dataTable" style="width: 100%;">
                                  <thead>
                                      <tr class="small bg-secondary text-white">
                                          <td>SN</td>
                                          <td>Lang</td>
                                          <td>Title</td>
                                          <td>Description</td>
                                          @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                          <td>Action</td>
                                          @endif
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($benefits as $key => $value)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $value->lang }}</td>
                                              <td>{{ $value->title }}</td>
                                              <td>{{ $value->description }}</td>
                                              @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                              <td>
                                                  <a href="#"  data-id="{{ $value->id }}" class="edit-benefit-pooja"><i class="fa fa-edit text-info"></i></a>
                                                  <span class="mx-2">||</span>
                                                  <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete-pooja-benefit') }}"></i>
                                              </td>
                                              @endif
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>


                      <div class="tab-pane fade" id="navs-justified-process" role="tabpanel">
                       <form action="{{ route('savePoojaProcess') }}" id="puja-process-form" class="" method="POST">
                       @csrf
                        <div class="row">
                           <div class="col-2 mb-3">
                                <label for="name">Language</label>
                                <select name="lang" class="form-control" id="process-language" required>
                                    <option value="" selected disabled>--Select Language--</option>
                                    <option value="en">English</option>
                                    <option value="hi">Hindi</option>
                                </select>
                                <input type="hidden" name="pooja_id" value="{{$pooja->id}}" />
                                <input type="hidden" name="puja_process_id" value="" />
                            </div>
                            <div class="col-8 mb-3">
                                <label for="name">Title</label>
                                <input type="text" id="process-title" name="title" class="form-control" id="" value="{{ input_value($pooja->title,old('title')) }}" placeholder="Enter Process Title">
                            </div>

                            <div class="col-12 mb-3">
                                <label for="name">Description</label>
                                <textarea name="description" id="process-description" rows="4" class="form-control" id="" placeholder="Enter process Description">{{ input_value($pooja->description,old('description')) }}</textarea>
                            </div>

                            <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary p-3" type="submit" name="puja_process">Save</button>
                            </div>

                            </div>
                            </form>

                            <h5 class="card-header">Pooja Process List</h5>    
                            <div class="row table-responsive">
                              <table class="table table-sm table-hover" id="dataTable" style="width: 100%;">
                                  <thead>
                                      <tr class="small bg-secondary text-white">
                                          <td>SN</td>
                                          <td>Lang</td>
                                          <td>Title</td>
                                          <td>Description</td>
                                          @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                          <td>Action</td>
                                          @endif
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($process as $key => $value)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $value->lang }}</td>
                                              <td>{{ $value->title }}</td>
                                              <td>{{ $value->description }}</td>
                                              @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                              <td>
                                                  <a href="#" data-id="{{ $value->id }}" class="edit-process-pooja"><i class="fa fa-edit text-info"></i></a>
                                                  <span class="mx-2">||</span>
                                                  <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete-pooja-process') }}"></i>
                                              </td>
                                              @endif
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>


                      <div class="tab-pane fade" id="navs-justified-mandir" role="tabpanel">
                       <form action="{{ route('savePoojaMandir') }}" id="puja-mandir-form" class="" method="POST" enctype="multipart/form-data" >
                       @csrf
                        <div class="row">
                           <div class="col-2 mb-3">
                                <label for="name">Language</label>
                                <select name="lang" class="form-control" id="mandir-language" required>
                                    <option value="" selected disabled>--Select Lang--</option>
                                    <option value="en">English</option>
                                    <option value="hi">Hindi</option>
                                    <input type="hidden" name="pooja_id" value="{{$pooja->id}}" />
                                    <input type="hidden" name="puja_mandir_id" value="" />
                                </select>
                            </div>
                            <div class="col-8 mb-3">
                                <label for="name">Temple Name (Including city, state)</label>
                                <input type="text" name="title" id="mandir-title" class="form-control" id="" value="{{ old('title') }}" placeholder="Enter Temple Name">
                            </div>



                            <div class="col-12 mb-3">
                                <label for="name">Description</label>
                                <textarea name="description" id="mandir-description" rows="6" class="form-control" id="" placeholder="Enter Temple Description">{{ old('description') }}</textarea>
                            </div>

                            <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                                <button class="btn btn-primary p-3" type="submit" name="puja_temple">Save</button>
                            </div>

                            </div>
                            </form>
                            <h5 class="card-header">Pooja Temple List</h5>    
                            <div class="row table-responsive">
                              <table class="table table-sm table-hover" id="dataTable" style="width: 100%;">
                                  <thead>
                                      <tr class="small bg-secondary text-white">
                                          <td>SN</td>
                                          <td>Lang</td>
                                          <td>Title</td>
                                          <td>Description</td>
                                          @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                          <td>Action</td>
                                          @endif
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($mandir as $key => $value)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $value->lang }}</td>
                                              <td>{{ $value->title }}</td>
                                              <td>{{ $value->description }}</td>
                                              @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                              <td>
                                                  <a href="#" data-id="{{ $value->id }}" class="edit-mandir-pooja"><i class="fa fa-edit text-info"></i></a>
                                                  <span class="mx-2">||</span>
                                                  <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete-pooja-mandir') }}"></i>
                                              </td>
                                              @endif
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                      <form action="{{ route('virtual.addNewPackagePost') }}" id="puja-package-form" class="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-6 mb-3">
                                    <label for="name">Package Name</label>
                                    <input type="text" id="package-name" name="package_name" class="form-control" id="" value="{{ old('package_name') }}" placeholder="Enter Package Name">
                                    <input type="hidden" name="pooja_id" value="{{$pooja->id}}" />
                                    <input type="hidden" name="puja_package_id" value="" />
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="name">Package Name Hindi</label>
                                    <input type="text" id="package-name-hindi" name="package_name_hindi" class="form-control" id="" value="{{ old('package_name_hindi') }}" placeholder="Enter Package Name in Hindi">
                                </div>


                                <div class="col-2 mb-3">
                                    <label for="name">Package Price</label>
                                    <input type="text" id="package-price" name="package_price" value="{{ old('package_price') }}" class="form-control numericInput" maxlength="10" id="package-price" placeholder="Enter Package Price">
                                </div>

                                <div class="col-2 mb-3">
                                    <label for="name">Member Limit</label>
                                    <input type="number" id="package-member-limit" name="member_limit" value="{{ old('member_limit') }}" class="form-control numericInput" max="20" min="1" id="member-limit" placeholder="Enter Member Limit">
                                </div>

                                <div class="col-5 mb-3">
                                    <label for="name">Title</label>
                                    <input type="text" id="package-title" name="procedure" class="form-control" placeholder="Enter Package Procedure" value="{{ old('procedure') }}">
                                </div>

                                <div class="col-5">
                                    <label for="name">Title Hindi</label>
                                    <input type="text" id="package-title-hindi" name="procedure_hindi" class="form-control" value="{{ old('procedure_hindi') }}" placeholder="Enter Package in Procedure">
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="name">Description</label>
                                    <textarea id="package-description" name="package_description"  id="editor" class="form-control" id="" placeholder="Enter Package Description">{{ old('package_description') }}</textarea>
                                </div>

                                <div class="col-6">
                                    <label for="name">Description in Hindi</label>
                                    <textarea id="package-description-hindi" name="package_description_hindi" id="editor1" class="form-control" id="" placeholder="Enter Package Description in Hindi">{{ old('package_description_hindi') }}</textarea>
                                </div>

                                <div class="col-12 m-0 mb-3 d-flex justify-content-end">
                                    <button class="btn btn-primary p-3" type="submit" name="add_new_package">Save Package</button>
                                </div>

                            </div>
                        </form>
                            <hr class="my-5">
                            <h5 class="card-header">Package List</h5>    
                            <div class="row table-responsive">
                              <table class="table table-sm table-hover" id="dataTable" style="width: 100%;">
                                  <thead>
                                      <tr class="small bg-secondary text-white">
                                          <td>SN</td>
                                          <td>Package</td>
                                          <td>Price</td>
                                          <td>Title</td>
                                          <td>Description</td>
                                          @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                          <td>Action</td>
                                          @endif
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($package as $key => $value)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $value->name }}</td>
                                              <td>{{ $value->procudre }}</td>
                                              <td>{{ $value->price }}</td>
                                              <td>{{ $value->description }}</td>
                                              @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('1'))
                                              <td>
                                                  <a href="#" data-id="{{ $value->id }}" class="edit-package-pooja"><i class="fa fa-edit text-info"></i></a>
                                                  <span class="mx-2">||</span>
                                                  <i class="fa fa-trash text-danger delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete-pooja-package') }}"></i>
                                              </td>
                                              @endif
                                          </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                            <div class="card">
                              <div class="card-content">
                                  <div class="d-flex justify-content-between">
                                      <h5 class="card-title p-3 pb-0 mb-1">Extra Images</h5>
                                      @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('master_admin'))
                                      <button class="btn btn-primary p-2 me-4 mt-3 add" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i>Add New Image</button>
                                      @endif
                                  </div>
                                  <div class="card-body py-3">
                                      <div class="table-responsive">
                                          @if ($errors->any())
                                              <div class="alert alert-danger">
                                                  <ul>
                                                      @foreach ($errors->all() as $error)
                                                          <li>{{ $error }}</li>
                                                      @endforeach
                                                  </ul>
                                              </div>
                                          @endif
                                          <table class="table table-striped table-hover" id="dataTable">
                                              <thead>
                                                  <tr class="text-nowrap">
                                                      <th>#</th>
                                                      <th>Image</th>
                        
                                                      @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('master_admin'))
                                                      <th>Delete</th>
                                                      @endif
                                                  </tr>
                                              </thead>
                                              <tbody>
                                              @foreach ($images_list as $value)
                                                  <tr>
                                                      <td>{{ $loop->iteration }}</td>
                                                      <td><img src="{{ $value->image }}" class="rounded" height="100px"></td>
                                                     
                                                     
                                                      @if(session('type')==base64_encode('master_admin') || session('type')==base64_encode('master_admin'))
                                                      <td><button class="badge bg-danger border-0 delete_this" data-id="{{ $value->id }}" data-url="{{ url('delete-vertual-pooja-image') }}">Delete Permanently</button></td>
                                                      @endif
                                                  </tr>
                                              @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                                                    <!-- Add Astrology -->
                          







                      </div>
                    </div>
                  </div>
                </div>




            </div>
       
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modelTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
      </div>
      <form action="{{ url('virtual-puja-save-image') }}" method="POST" enctype="multipart/form-data">
      @csrf
          <input type="hidden" name="id" id="id">
          <input type="hidden" name="pooja_id" id="puja-id" value="{{$pooja->id}}">
          <div class="modal-body">

              <div class="input-group">
                  <span class="input-group-text"> Puja Images </span>
                  <input type="file" class="form-control" name="image[]" accept="images/*" multiple>
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
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
        });

    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .then( editor => {
                console.log( editor );
        } )
        .catch( error => {
                console.error( error );
    });
</script>


<script>
    $('.edit-detail-pooja').click(function(){
        $("#puja-detail-form")[0].reset();
        var id = $(this).data('id');
        var url = "{{ url('get-puja-detail-single') }}";
        $.ajax({
            type: "GET",
            url: url+'/'+id,
            success: function (response) {
                $("input[name='puja_detail_id']").val(response.id);
                $("#detail-language").val(response.lang);
                $("#detail-puja-purpose").val(response.purpose);
                $("#detail-puja-name").val(response.name);
                $("#detail-tithi-name").val(response.tithi_name);
                $("#detail-puja-description").val(response.description);
            }
        });
    });


    $('.edit-benefit-pooja').click(function(){
        $("#puja-benefit-form")[0].reset();
        var id = $(this).data('id');
        var url = "{{ url('get-puja-benefit-single') }}";
        $.ajax({
            type: "GET",
            url: url+'/'+id,
            success: function (response) {
                $("input[name='puja_benefit_id']").val(response.id);
                $("#benefit-language").val(response.lang);
                $("#benefit-title").val(response.title);
                $("#benefit-description").val(response.description);
            }
        });
    });



    $('.edit-process-pooja').click(function(){
        $("#puja-process-form")[0].reset();
        var id = $(this).data('id');
        var url = "{{ url('get-puja-process-single') }}";
        $.ajax({
            type: "GET",
            url: url+'/'+id,
            success: function (response) {
                $("input[name='puja_process_id']").val(response.id);
                $("#process-language").val(response.lang);
                $("#process-title").val(response.title);
                $("#process-description").val(response.description);
            }
        });
    });



    $('.edit-mandir-pooja').click(function(){
        $("#puja-mandir-form")[0].reset();
        var id = $(this).data('id');
        var url = "{{ url('get-puja-mandir-single') }}";
        $.ajax({
            type: "GET",
            url: url+'/'+id,
            success: function (response) {
                $("input[name='puja_mandir_id']").val(response.id);
                $("#mandir-language").val(response.lang);
                $("#mandir-title").val(response.title);
                $("#mandir-description").val(response.description);
            }
        });
    });



    $('.edit-package-pooja').click(function(){
        $("#puja-package-form")[0].reset();
        var id = $(this).data('id');
        var url = "{{ url('get-puja-package-single') }}";
        $.ajax({
            type: "GET",
            url: url+'/'+id,
            success: function (response) {
                $("input[name='puja_package_id']").val(response.id);
                $("#package-name-hindi").val(response.name_hindi);
                $("#package-name").val(response.name);
                $("#package-price").val(response.price);
                $("#package-description").val(response.description);
                $("#package-description-hindi").val(response.description_hindi);
                $("#package-title").val(response.procudre);
                $("#package-title-hindi").val(response.procedure_hindi);
                $("#package-member-limit").val(response.member_limit);
            }
        });
    });
  </script>




@endsection
