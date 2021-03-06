@extends('home.upazilaNirbahiOfficer.master')

@section('1')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    "{{ session('user')->upazila }}" Upazila Allocation
  </div>
  <div class="card-body">
      <table class="table table-sm table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Year</th>
            <th scope="col">Week</th>
            <th scope="col">Item</th>
            <th scope="col">Amount (in KG)</th>
            <th scope="col">Unallocated Amount (in KG)</th>
          </tr>
        </thead>
        <tbody>
            @foreach($markets as $key => $market)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$market->year}}</td>
                <td>{{$market->week}}</td>
                <td>{{$market->item}}</td>
                <td>{{$market->amount}}</td>
                <td>{{$market->unallocated}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
