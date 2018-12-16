@extends('home.centralAdmin.master')

@section('10')
    active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Add Divisional Officer
      </div>
      <div class="card-body">
        <form method="post">
          @csrf
          <div class="form-group">
            <label>Select Division</label>
            <select class="custom-select custom-select-sm" name="division" required>
              <option value="Dhaka">Dhaka</option>
              <option value="Khulna">Khulna</option>
              <option value="Barishal">Barishal</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Mymensingh">Mymensingh</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur</option>
              <option value="Sylhet">Sylhet</option>
            </select>
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
          <button type="submit" class="btn btn-sm btn-primary">Add Divisional Officer</button>
        </form>
      </div>
    </div>

@endsection
