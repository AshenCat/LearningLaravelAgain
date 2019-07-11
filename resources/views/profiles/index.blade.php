@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fyyz1-1.fna.fbcdn.net/vp/885953fceb7ee32a2623fa424f110183/5DA8C4B7/t51.2885-19/s150x150/26066874_1697507040306984_2164242150827491328_n.jpg?_nc_ht=instagram.fyyz1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username}}</h1>
                <a href="/posts/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/posts/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection