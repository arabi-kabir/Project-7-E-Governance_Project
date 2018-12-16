@extends('home.centralAdmin.master')

@section('6')
    active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    Division List
  </div>
  <div class="card-body">
      <table class="table table-sm table-bordered">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
          </tr>
        </thead>
        <tbody>
            @foreach($divisions as $key => $division)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$division->name}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
