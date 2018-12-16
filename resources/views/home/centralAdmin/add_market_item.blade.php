@extends('home.centralAdmin.master')

@section('2')
    active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Add Market Forecast
      </div>
      <div class="card-body">
        <form method="post">
          @csrf
          <div class="form-group">
            <label>Year</label>
            <input type="number" required name="year" class="form-control" placeholder="Enter Year">
          </div>
          <div class="form-group">
            <label>Week</label>
            <input type="number" required name="week" class="form-control" placeholder="Enter Week">
          </div>
          <div class="form-group">
            <label>Item</label>
            <select class="custom-select" name="item" required>
              @foreach($items as $key => $item)
                <option value="{{$item->item_name}}">{{$item->item_name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label>Amount (in KG)</label>
            <input type="number" required name="amount" class="form-control" placeholder="Enter amount">
          </div>


          <button type="submit" class="btn btn-sm btn-primary">Add Item</button>
        </form>
      </div>
    </div>

@endsection
