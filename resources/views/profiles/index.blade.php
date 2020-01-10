@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/storage/{{$user->profile->image}}" class="rounded-circle w-100" alt="">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                <div class="pr-5">
                    <a href="/p/create" class="btn btn-sm btn-primary">Add New Post</a>
                    <a href="/profile/{{$user->id}}/edit" class="btn btn-sm btn-outline-secondary">Edit Profile</a>
                </div>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
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
    <hr>
    <div class="row pt-4">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100" alt="">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection