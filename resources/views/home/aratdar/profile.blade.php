@extends('home.aratdar.master')

@section('2')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    My Profile
  </div>
  <div class="card-body">
      <table class="table table-sm table-bordered">

        <tbody>
              <tr>
                <th scope="row">Fullname</th>
                <td>{{session('user')->fullname}}</td>
              </tr>

              <tr>
                <th scope="row">Username</th>
                <td>{{session('user')->username}}</td>
              </tr>

              <tr>
                <th scope="row">Password</th>
                <td>{{session('user')->password}}</td>
              </tr>

              <tr>
                <th scope="row">Email</th>
                <td>{{session('user')->email}}</td>
              </tr>

              <tr>
                <th scope="row">Division</th>
                <td>{{session('user')->Division}}</td>
              </tr>

              <tr>
                <th scope="row">District</th>
                <td>{{session('user')->District}}</td>
              </tr>

              <tr>
                <th scope="row">Upazila</th>
                <td>{{session('user')->upazila}}</td>
              </tr>

              <tr>
                <th scope="row">Phone</th>
                <td>{{session('user')->phone}}</td>
              </tr>
          </tbody>
      </table>
  </div>
</div>
@endsection
