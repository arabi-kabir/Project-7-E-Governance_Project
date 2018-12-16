@extends('home.centralAdmin.master')

@section('9')
    active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Add District
      </div>
      <div class="card-body">
        <form method="post">
          @csrf
          <div class="form-group">
            <label>Add District</label>
            <input type="text" name="name" class="form-control" placeholder="Enter District">
          </div>
          <div class="form-group">
            <label>Select Division</label>
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
          <button type="submit" class="btn btn-sm btn-primary">Add District</button>
        </form>
      </div>
    </div>

@endsection
