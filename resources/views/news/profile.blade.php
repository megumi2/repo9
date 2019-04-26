@extends('layouts.front')

@section('content')
<div class="container">
  <hr color="#c0c0c0">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>MY プロフィール</h2>
      <form action="{{ action('Auth\NewsController@update') }}" method="post" enctype="multipart/form-data">
  </div>
  <div class="form-group row">
    <label class="col-md-2" for="name">名前</label>
    <div class="col-md-10">
      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2" for="gender">性別</label>
  <div class="col-md-10">
    <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
  </div>
  </div>
  <div class="form-group row">
    <label class="col-md-2" for="hobby">趣味</label>
  </div class="col-md-10">
   <input type="text" class="form-control" name="gender" value="{{ old('hobby') }}">
</div>
<div class="form-group row">
  <label class="col-md-2" for="introduction">自己紹介</label>
  <div class="col-md-10">
    <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
  </div>
</div>
  </div>
</div>
@endsection
