@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://images.pexels.com/photos/238620/pexels-photo-238620.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="rounded-circle w-100" alt="">
       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
               
           <h1>{{ $user->username }}</h1>
           <a href="#" class="btn btn-primary">Add New Post</a>
           </div>
           <div class="d-flex">
               <div class="pr-5"><strong>253</strong> posts</div>
               <div class="pr-5"><strong>23k</strong> followers</div>
               <div class="pr-5"><strong>212</strong> following</div>
           </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
           <div>
            {{$user->profile->description}}
           </div>
        <div><a href="#">{{$user->profile->url }}</a></div>
       </div>
   </div>

   <div class="row pt-5">
     <div class="col-4"><img src="https://images.pexels.com/photos/3507989/pexels-photo-3507989.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-100" alt=""></div>
     <div class="col-4"><img src="https://images.pexels.com/photos/3467153/pexels-photo-3467153.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-100" alt=""></div>
     <div class="col-4"><img src="https://images.pexels.com/photos/3489072/pexels-photo-3489072.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="w-100" alt=""></div>

   </div>
</div>
@endsection
