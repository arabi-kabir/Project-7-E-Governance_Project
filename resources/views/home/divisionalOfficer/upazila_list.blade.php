@extends('home.divisionalOfficer.master')

@section('5')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    Upazila List
  </div>
  <div class="card-body">

      <form method="post">
        @csrf
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Upazila Name</label>
          <div class="col-sm-10">
            <input type="text" name="name" required class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">District Name</label>
          <div class="col-sm-10">
            <select class="custom-select custom-select" name="district" required>
                @foreach($districts as $district)
                    <option value="{{$district->name}}">{{$district->name}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10">
            <button type="submit" class="btn btn-success btn-sm" name="button">Add Upazila</button>
          </div>
        </div>
      </form>

      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">District</th>
            <th scope="col">Upazila</th>
          </tr>
        </thead>
        <tbody>
            @foreach($upazilas as $key => $upazila)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$upazila->district}}</td>
                <td>{{$upazila->name}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
