@extends('home.divisionalOfficer.master')

@section('6')
  active
@endsection

@section('content')

    <div class="card border-dark">
      <div class="card-header">
        Add Upazila Officer
      </div>
      <div class="card-body">
        <form method="post">
          @csrf
          <div class="form-group">
            <label>Select Upazila</label>
            <select class="custom-select custom-select-sm" name="upazila" required>
                @foreach($upazilas as $upazila)
                    <option value="{{$upazila->name}}">{{$upazila->name}}</option>
                @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>District</label>
            <input type="text" name="district" class="form-control form-control-sm" placeholder="District">
          </div>
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="fullname" class="form-control form-control-sm" placeholder="Fullname">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-sm" placeholder="Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control form-control-sm" placeholder="Password">
          </div>
          <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control form-control-sm" placeholder="E-mail address">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="tel" name="phone" class="form-control form-control-sm" placeholder="Phone">
          </div>

          <button type="submit" class="btn btn-sm btn-primary">Add Upazila Officer</button>
        </form>
      </div>
    </div>

@endsection
