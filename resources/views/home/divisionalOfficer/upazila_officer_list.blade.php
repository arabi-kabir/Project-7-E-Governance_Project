@extends('home.divisionalOfficer.master')

@section('7')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    Upazila Officer List
  </div>
  <div class="card-body">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">District</th>
            <th scope="col">Upazila</th>
            <th scope="col">Fullname</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>
            @foreach($upa_officers as $key => $officer)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$officer->District}}</td>
                <td>{{$officer->upazila}}</td>
                <td>{{$officer->fullname}}</td>
                <td>{{$officer->username}}</td>
                <td>{{$officer->password}}</td>
                <td>{{$officer->email}}</td>
                <td>{{$officer->phone}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
