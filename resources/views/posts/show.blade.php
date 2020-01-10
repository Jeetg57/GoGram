@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3 ">
                        <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle"
                            style="max-width: 40px" alt="">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a class="nounderline pr-1" href="/profile/{{$post->user->id}}">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                            <span>•</span>
                            <a href="" class="pl-1 nounderline">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold"><a class="nounderline" href="/profile/{{$post->user->id}}">
                            <span class="text-dark">{{$post->user->username}}</span>
                        </a>
                    </span>
                    &nbsp;{{$post->caption}}
                </p>
            </div>
        </div>
    </div>
    @endsection