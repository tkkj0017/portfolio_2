@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          @foreach ($cartitems as $cartitem)
            <div class="card-header">
              <a href="/item/{{ $cartitem->item_id }}">{{ $cartitem->item_name }}</a>
            </div>
            <div class="card-body">
              <div>
                ¥ {{ $cartitem->price }}
              </div>
              <div>
                {{ $cartitem->quantity }}個
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            小計
          </div>
          <div class="card-body">
            ¥ {{ $subtotal }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection