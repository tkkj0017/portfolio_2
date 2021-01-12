@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-left">
      @foreach($items as $item)
      <div class="col-md-4 mb-2">
        <div class="card">
          <div class="card-header">
            {{ $item->item_name }}
          </div>
          <div class="card-body">
            <img src="{{ asset('img/'.$item->image) }}" class="img-fluid rounded" alt="{{ $item->name }}"> 
          </div>
          <div class="card-body">
            ¥ {{ $item->price }}
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection