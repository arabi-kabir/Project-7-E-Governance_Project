@extends('auth.master')

@section('content')
    <div class="container mt-2 mb-1">
        <h1 class="text-center font-weight-light">Registration</h1>


        <form id="login-form" method="post">
          @csrf
          <h3 class="text-center">Personal Information</h3>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input name="password" type="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Fullname</label>
            <div class="col-sm-10">
              <input name="fullname" type="text" class="form-control" placeholder="Fullname">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input name="phone" type="text" class="form-control" placeholder="Phone">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="text" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
              <input name="address" type="text" class="form-control" placeholder="Address">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Regsiter User</button>
            </div>
          </div>
        </form>

    </div>
@endsection
