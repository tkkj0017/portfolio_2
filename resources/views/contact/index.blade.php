@extends('layouts.app')

@section('content')
<div class="container">
  <div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">名前</th>
          <th scope="col">メールアドレス</th>
          <th scope="col">件名</th>
          <th scope="col">本文</th>
          <th scope="col">送信日時</th>
        </tr>
      </thead>
      <tbody>
        @foreach($contacts as $contact)
        <tr>
          <th>{{ $contact->id }}</th>
          <td>{{ $contact->name }}</td>
          <td>{{ $contact->email }}</td>
          <td>{{ $contact->title }}</td>
          <td>{{ $contact->body }}</td>
          <td>{{ $contact->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection