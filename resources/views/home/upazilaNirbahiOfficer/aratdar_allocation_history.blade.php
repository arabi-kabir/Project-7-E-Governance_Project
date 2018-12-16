@extends('home.upazilaNirbahiOfficer.master')

@section('3')
  active
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    Aratdar Allocation History
  </div>
  <div class="card-body">

        <!-- <form method="post">
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
              <button type="submit" class="btn btn-info" name="button">Apply</button>
            </div>
          </div>
        </form> -->


      <table class="table table-sm table-bordered table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Aratdar ID</th>
            <th scope="col">Year</th>
            <th scope="col">Week</th>
            <th scope="col">Upazila</th>
            <th scope="col">Item</th>
            <th scope="col">Amount (in KG)</th>
          </tr>
        </thead>
        <tbody>
            @foreach($historys as $key => $history)
              <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$history->aratdar_id}}</td>
                <td>{{$history->year}}</td>
                <td>{{$history->week}}</td>
                <td>{{$history->upazila}}</td>
                <td>{{$history->item}}</td>
                <td>{{$history->amount}}</td>
              </tr>
            @endforeach
      </table>
  </div>
</div>
@endsection
