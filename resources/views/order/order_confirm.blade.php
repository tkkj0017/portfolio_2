@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center" style="margin-bottom:10px;">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
              お届け先入力
          </div>
          <div class="card-body">
              <form method="POST" action="/order">
                  @csrf
                  <div class="form-row mb-4">
                    <div class="col-md-6">
                        @if(!Request::has('confirm'))
                            <button type="submit" class="btn btn-outline-dark btn-sm" name="get_user_profile">自分の登録情報を入力</button>
                        @endif
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="name">氏名</label>
                          @if(Request::has('confirm'))
                              <p class="form-control-static">{{ old('name') }}</p>
                              <input id="name" type="hidden" name="name" value="{{ old('name') }}">
                          @else
                              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                          @endif
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="postalcode">郵便番号</label>
                          @if(Request::has('confirm'))
                              <p class="form-control-static">{{ old('postalcode') }}</p>
                              <input id="postalcode" type="hidden" name="postalcode" value="{{ old('postalcode') }}">
                          @else
                              <input id="postalcode" type="text" class="form-control" name="postalcode" value="{{ old('postalcode') }}">
                          @endif
                      </div>
                  </div>

                  <div class="form-row mb-1">
                      <div class="form-group col-md-6">
                          <label for="addressline1">住所1</label>
                          @if(Request::has('confirm'))
                              <p class="form-control-static">{{ old('addressline1') }}</p>
                              <input id="addressline1" type="hidden" name="addressline1" value="{{ old('addressline1') }}">
                          @else
                              <input id="addressline1" type="text" class="form-control" name="addressline1" value="{{ old('addressline1') }}">
                          @endif
                      </div>
                  </div>

                  <div class="form-row mb-1">
                      <div class="form-group col-md-6">
                          <label for="addressline2">住所2</label>
                          @if(Request::has('confirm'))
                              <p class="form-control-static">{{ old('addressline2') }}</p>
                              <input id="addressline2" type="hidden" name="addressline2" value="{{ old('addressline2') }}">
                          @else
                              <input id="addressline2" type="text" class="form-control" name="addressline2" value="{{ old('addressline2') }}">
                          @endif
                      </div>
                  </div>

                  <div class="form-row mb-1">
                      <div class="form-group col-md-6">
                          <label for="phonenumber">電話番号</label>
                          @if(Request::has('confirm'))
                              <p class="form-control-static">{{ old('phonenumber') }}</p>
                              <input id="phonenumber" type="hidden" name="phonenumber" value="{{ old('phonenumber') }}">
                          @else
                              <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}">
                          @endif
                      </div>
                  </div>

                  <div class="form-row">
                      <div class="col-md-6">
                          @if(Request::has('confirm'))
                              <button type="submit" class="btn btn-outline-dark btn-sm" name="post">注文を確定する</button>
                              <button type="submit" class="btn btn-default" name="back">修正する</button>
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
<div class="row justify-content-center">
  <div class="col-md-8">
      <div class="card">
          @foreach ($cartitems as $cartitem)
            <div class="card-header">
                {{ $cartitem->item_name }}
            </div>
            <div class="card-body">
                <div>
                    {{ $cartitem->price }}円
                </div>
                <div>
                    {{ $cartitem->quantity }}個
                </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection
