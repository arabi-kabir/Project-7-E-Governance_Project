@extends('auth.master')

@section('content')
    <div class="container mb-5 mt-4">
        <h1 class="text-center font-weight-light">Registration for Aratdar</h1>
        <hr class="mb-5">

        <form id="login-form" class="text-center" method="post">
          @csrf
          <div class="form-group">
            <h3>Select Division</h3>
            <select class="custom-select" name="division" required>
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

          <button type="submit" class="btn btn-success">Next Step</button>
        </form>

    </div>
@endsection
