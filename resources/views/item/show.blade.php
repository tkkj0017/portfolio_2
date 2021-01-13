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
      </div>
    </div>
  </div>
  @endsection