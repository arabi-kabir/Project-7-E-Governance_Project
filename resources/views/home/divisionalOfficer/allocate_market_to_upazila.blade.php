@extends('home.divisionalOfficer.master')

@section('3')
  active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Allocate to upazila
      </div>
      <div class="card-body">
        <form method="post">
          @csrf

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Select Upazila</label>
            <div class="col-sm-10">
              <select class="custom-select" name="upazila" required>
                @foreach($upazilas as $key => $upazila)
                  <option value="{{$upazila->name}}">{{$upazila->name}}</option>
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
