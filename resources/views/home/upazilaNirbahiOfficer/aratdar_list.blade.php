@extends('home.upazilaNirbahiOfficer.master')

@section('4')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    Upazila Aratdar List
  </div>
  <div class="card-body">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">UserID</th>
            <th scope="col">Upazila</th>
            <th scope="col">Fullname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
            @foreach($aratdars as $key => $aratdar)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$aratdar->id}}</td>
                <td>{{$aratdar->upazila}}</td>
                <td>{{$aratdar->fullname}}</td>
                <td>{{$aratdar->email}}</td>
                <td>{{$aratdar->phone}}</td>
                <td>{{$aratdar->address}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
