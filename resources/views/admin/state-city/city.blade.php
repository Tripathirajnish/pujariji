@extends('admin.layout.layouts')
@section('content')
@section('title','City List')

{{-- Content --}}
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container m-0 p-0">
        <div class="card m-0 p-0">
            <div class="card-header d-flex justify-content-between">
            <div class="fw-bold"> City List</div>
            <div class="fw-bold"><button class="btn btn-primary add"  data-bs-toggle="modal" data-bs-target="#exampleModal">Add New City</button></div>

            </div>
            <div class="card-body table-responsive">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <table class="table table-sm small table-hover" id="dataTable">
                    <thead>
                        <tr class="small">
                            <th>#</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $city->city }}({{ $city->city_hindi }})</td>
                            <td>{{ state_name($city->state_id) }}</td>
                            <td>
                                <a href="#" class="updateStatustoggle" data-url="{{ url('update_city') }}" data-id="{{ $city->id }}">
                                    @if($city->status=='0')
                                    <i class="fa fa-eye text-success"></i>
                                    @else
                                    <i class="fa fa-eye-slash text-danger"></i>
                                    @endif
                                </a>
                                <span class="mx-2">||</span>
                                <i class="fa fa-trash text-danger delete_this" data-id="{{ $city->id }}" data-url="{{ url('delete_city') }}"></i>
                            </td>
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
          <h5 class="modal-title" id="city_modal">Add New City</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <form action="{{ url('save_city') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group mb-3">
                    <label for="state">Select State</label>
                    <select name="state_id" id="state" class="form-control state_selected">
                        <option value="" disabled selected>--Select State--</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->state }}({{ $state->state_hindi }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="state">City Name</label>
                    <select name="city_name" id="city_name" class="form-control">
                        <option value="" disabled selected>--Select City--</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">City Name(Hindi)</label>
                    <input type="text" name="city_name_hindi" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
        $('.state_selected').on('change', function() {
            var selectedState = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{ url('get_p_cities') }}",
                type: 'POST',
                data: { data: selectedState },
                success: function(data) {
                    var citySelect = $('#city_name');
                    citySelect.empty();
                    citySelect.append($('<option></option>').text('Select City').attr({'value': '', 'selected': 'selected', 'disabled': 'disabled'}));

                    if (data.length > 0) {
                        $.each(data, function(index, city) {
                            citySelect.append($('<option></option>').attr('value', city.name).text(city.name));
                        });
                    } else {
                        citySelect.append($('<option></option>').text('No cities found'));
                    }
                },
                error: function() {
                    console.error('Failed to fetch cities');
                }
            });
        });

        $('.state_selected').trigger('change');
    });
</script>
@endsection
