@extends('home.centralAdmin.master')

@section('4')
    active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Allocate Market
      </div>
      <div class="card-body">
        <form method="post">
          @csrf
          <div class="form-group">
            <label>Select Division</label>
            <select class="custom-select" name="division" required>
              <option value="Dhaka">Dhaka</option>
              <option value="Khulna">Khulna</option>
              <option value="Barishal">Barishal</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Mymensingh">Mymensingh</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur</option>
              <option value="Sylhet">Sylhet</option>
            </select>
          </div>

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
            <label>Select Amount</label>
            <input type="text" name="amount" class="form-control" placeholder="Enter amount">
          </div>

          <button type="submit" class="btn btn-sm btn-success">Allocate</button>
        </form>
      </div>
    </div>

@endsection
