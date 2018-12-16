@extends('auth.master')

@section('content')
    <div class="container mt-5 mb-3">
        <h1 class="text-center font-weight-light">Log in</h1>
        <form id="login-form" method="post">
            @csrf
          <div class="form-group">
            <label>Select User Type</label>
            <select class="custom-select" name="type" required>
              <option value="0">Central Admin</option>
              <!-- <option value="1">District Officer</option> -->
              <option value="2">Divisional Officer</option>
              <option value="3">Upazila Nirbahi Officer</option>
              <option value="4">Aratdar</option>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input required type="text" name="username" class="form-control" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input required type="password" name="password" class="form-control" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-success">Login</button>
        </form>
    </div>
@endsection
