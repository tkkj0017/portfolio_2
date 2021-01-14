@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card-header">
          {{ $item->item_name }}
        </div>
        <div class="card-body">
          <img src="{{ asset('img/'.$item->image) }}" class="img-fluid rounded" alt="{{ $item->item_name }}"> 
        </div>
        <div class="card-body">
          {{ $item->detail }}
        </div>
        <div class="card-body">
          ¥ {{ $item->price }}
        </div>
        <div class="card-body">
        @auth
          <form method="post" action="cartitem" class="form-inline m1">
            {{ csrf_field() }}
            <select name="quantity" class="form-control col-md-2 mr-1">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <input type="hidden" name="item_id" value="{{ $item->id }}">
            <button type="submit" class="btn btn-outline-dark btn-sm">カートに入れる</button>
          </form>
          @endauth
        </div>
      </div>
    </div>
  </div>
  @endsection