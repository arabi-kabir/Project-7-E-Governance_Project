@extends('home.upazilaNirbahiOfficer.master')

@section('2')
  active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Allocate to Aratdar
      </div>
      <div class="card-body">
        <form method="post">
          @csrf

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Select Aratdar</label>
            <div class="col-sm-10">
              <select class="custom-select" name="aratdar_id" required>
                @foreach($aratdars as $key => $aratdar)
                  <option value="{{$aratdar->id}}">{{$aratdar->fullname}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Year</label>
            <div class="col-sm-10">
              <input type="number" name="year" required class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Week</label>
            <div class="col-sm-10">
              <input type="number" name="week" required class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Item</label>
            <div class="col-sm-10">
              <select class="custom-select" name="item" required>
                @foreach($items as $key => $item)
                  <option value="{{$item->item_name}}">{{$item->item_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Amount</label>
            <div class="col-sm-10">
              <input type="number" name="amount" required class="form-control">
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-success" name="button">Allocate</button>
            </div>
          </div>
        </form>


        </form>
      </div>
    </div>

@endsection
