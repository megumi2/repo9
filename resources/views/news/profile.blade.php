@extends('layouts.front')

@section('content')
<div class="container">
  <div class="row">
    <h2>プロフィール</h2>
  </div>
 <div class="row">
   <div class="col-md-4">
   </div>
   <div class="col-md-8">


   </div>
 </div>
 <div class="row">
   <div class="list-news col-md-12 mx-auto">
     <div class="row">
       <table class="table table-dark">
         <thead>
         <tr>
           <th width="10%">ID</th>
           <th width="10%">名前</th>
           <th width="10%">性別</th>
           <th width="10%">趣味</th>
           <th width="50%">自己紹介</th>
         </tr>
       </thead>
       <tbody>
         @foreach($posts as $profile)
          <tr>
            <td>{{ $profile->id }}</td>
            <td>{{ $profile->name }}</td>
            <td>{{ $profile->gender }}</td>
            <td>{{ $profile->hobby }}</td>
            <td>{{ str_limit($profile->introduction, 250) }}</td>
            <td>

            </td>
          <tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
 </div>
</div>
@endsection
