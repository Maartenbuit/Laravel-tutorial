@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fjoresablount%2Ffiles%2F2019%2F08%2Funnamed-1200x1191.jpg" alt="instaLICIOUS" style="max-height: 200px" class='rounded-circle'>
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user ->username }}</h1>
            <a href="#">Add post</a>
            </div> 
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong>posts</div>
                <div class="pr-5"><strong>23k </strong>followers</div>
                <div class="pr-5"><strong>212 </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title}}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 pt-5">
        <img src="https://scontent-amt2-1.cdninstagram.com/vp/eada516fcca6dc82a716976fa3be632f/5E444480/t51.2885-15/sh0.08/e35/c0.115.933.933a/s640x640/73319948_3118988548118480_2584593794372883946_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=108" class="w-100">
        </div>
        <div class="col-4 pt-5">
        <img src="https://scontent-amt2-1.cdninstagram.com/vp/a00504f4d0855f972fcfa9742a98b0d9/5E5B7769/t51.2885-15/e35/c93.0.563.563a/73427310_857771071310415_1803775118571694506_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=103" class="w-100">
        </div>
        <div class="col-4 pt-5">
        <img src="https://scontent-amt2-1.cdninstagram.com/vp/a9cbad776b4495c38d63533923047b91/5E5DA76B/t51.2885-15/sh0.08/e35/c0.115.925.925a/s640x640/71114027_2514356725320652_199639527808064588_n.jpg?_nc_ht=scontent-amt2-1.cdninstagram.com&_nc_cat=104" class="w-100">
        </div>
    </div>

</div>
@endsection
