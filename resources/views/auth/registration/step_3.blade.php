@extends('auth.master')

@section('content')
    <div class="container mb-5 mt-4">
        <h1 class="text-center font-weight-light">Registration for Aratdar</h1>
        <hr class="mb-5">

        <form id="login-form" class="text-center" method="post">
          @csrf
          <div class="form-group">
            <h3>Select Upazila</h3>
            <select class="custom-select" name="upazila" required>
              @foreach($upazilas as $upazila)
                <option value="{{$upazila->name}}">{{$upazila->name}}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" class="btn btn-success">Next Step</button>
        </form>

    </div>
@endsection
