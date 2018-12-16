@extends('home.centralAdmin.master')

@section('7')
    active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    District List
  </div>
  <div class="card-body">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Division</th>
            <th scope="col">District</th>
          </tr>
        </thead>
        <tbody>
            @foreach($districts as $key => $district)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$district->division}}</td>
                <td>{{$district->name}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
