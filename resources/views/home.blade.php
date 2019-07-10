@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fyyz1-1.fna.fbcdn.net/vp/885953fceb7ee32a2623fa424f110183/5DA8C4B7/t51.2885-19/s150x150/26066874_1697507040306984_2164242150827491328_n.jpg?_nc_ht=instagram.fyyz1-1.fna.fbcdn.net" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Cats of instagram</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis necessitatibus culpa, praesentium pariatur quidem architecto est veritatis? Molestias itaque ea iste consectetur quasi nesciunt et perferendis dignissimos. Doloremque, laudantium incidunt?</div>
            <div><a href="#">www.catsofinsta.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fyyz1-1.fna.fbcdn.net/vp/4b9e788e230fae9453396d862f8ead31/5DA9697E/t51.2885-15/sh0.08/e35/c0.180.1440.1440/s640x640/65871300_695624967526952_7534039604780497523_n.jpg?_nc_ht=instagram.fyyz1-1.fna.fbcdn.net" alt="cat1" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fyyz1-1.fna.fbcdn.net/vp/4b9e788e230fae9453396d862f8ead31/5DA9697E/t51.2885-15/sh0.08/e35/c0.180.1440.1440/s640x640/65871300_695624967526952_7534039604780497523_n.jpg?_nc_ht=instagram.fyyz1-1.fna.fbcdn.net" alt="cat1" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fyyz1-1.fna.fbcdn.net/vp/4b9e788e230fae9453396d862f8ead31/5DA9697E/t51.2885-15/sh0.08/e35/c0.180.1440.1440/s640x640/65871300_695624967526952_7534039604780497523_n.jpg?_nc_ht=instagram.fyyz1-1.fna.fbcdn.net" alt="cat1" class="w-100">
        </div>
    </div>
</div>
@endsection
