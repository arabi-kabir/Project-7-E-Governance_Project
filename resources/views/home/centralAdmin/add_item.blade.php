@extends('home.centralAdmin.master')

@section('8')
    active
@endsection

@section('content')

    <div class="card">
      <div class="card-header">
        Add Item
      </div>
      <div class="card-body">
        <form method="post" method="post">
          @csrf
          <div class="form-group">
            <label>Item Name</label>
            <input type="text" name="item_name" class="form-control" placeholder="Item name">
          </div>

          <button type="submit" class="btn btn-sm btn-success">Add Item</button>
        </form>
      </div>
    </div>

@endsection
