@extends('home.divisionalOfficer.master')

@section('2')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    {{session('user')->Division}} : Division Allocation
  </div>
  <div class="card-body">

        <form method="post">
          @csrf
          <div class="form-group row">
            <label class="col-sm-1 col-form-label">Year</label>
            <div class="col-sm-11">
              <input type="number" name="year" required class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-1 col-form-label">Week</label>
            <div class="col-sm-11">
              <input type="number" name="week" required class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-1 col-form-label"></label>
            <div class="col-sm-11">
              <button type="submit" class="btn btn-success" name="button">Apply</button>
            </div>
          </div>
        </form>


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
