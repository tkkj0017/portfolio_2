@extends('layouts.app')

@section('content')
@if(Session::has('flash_message'))
  <div class="alert alert-success">
      {{ session('flash_message') }}
  </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お問い合わせ</div>

                <div class="card-body">
                <form method="POST" action="{{ route('contact.store') }}">
                      @csrf

                      <div class="form-row">
                          <div class="form-group col-md-12">
                              <label for="name">名前</label>
                              @if(Request::has('confirm'))
                                  <p class="form-control-static">{{ old('name') }}</p>
                                  <input id="name" type="hidden" name="name" value="{{ old('name') }}">
                              @else
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                              @endif
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="form-group col-md-12">
                              <label for="email">メールアドレス</label>
                              @if(Request::has('confirm'))
                                  <p class="form-control-static">{{ old('region') }}</p>
                                  <input id="email" type="hidden" name="email" value="{{ old('email') }}">
                              @else
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                              @endif
                          </div>
                      </div>
    
                      <div class="form-row mb-1">
                          <div class="form-group col-md-12">
                              <label for="title">件名</label>
                              @if(Request::has('confirm'))
                                  <p class="form-control-static">{{ old('title') }}</p>
                                  <input id="title" type="hidden" name="title" value="{{ old('title') }}">
                              @else
                                  <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}">
                              @endif
                          </div>
                      </div>
    
                      <div class="form-row mb-1">
                          <div class="form-group col-md-12">
                              <label for="body">本文</label>
                              @if(Request::has('confirm'))
                                  <p class="form-control-static">{{ old('body') }}</p>
                                  <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                              @else
                                  <textarea id="body" type="text" class="form-control" name="body" value="{{ old('body') }}"></textarea>
                              @endif
                          </div>
                      </div>

                      <div class="form-row">
                          <div class="col-md-6">
                              @if(Request::has('confirm'))
                                  <button type="submit" class="btn btn-outline-dark btn-sm" name="post">送信する</button>
                                  <button type="submit" class="btn btn-default" name="back">内容を修正する</button>
                              @else
                                  <button type="submit" class="btn btn-outline-dark btn-sm" name="confirm">入力内容を確認する</button>
                              @endif
                          </div>
                      </div>
    
                  </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
