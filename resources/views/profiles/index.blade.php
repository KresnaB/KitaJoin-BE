@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                <a href="/post/create">Add New Post</a>
                @endcan
                
            </div>
            <div>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-3">{{$user->name}}</div>
                <div class="pr-3">memiliki minat : {{$user->profile->interest}}</div>
            </div>
            <div class="d-flex">
                <div class="pr-3">Jurusan : {{$user->profile->department}}</div>
                <div class="pr-3">Prodi : {{$user->profile->program}}</div>
                <div class="pr-3">semester : {{$user->profile->semester}}</div>
            </div>
            <div class="d-flex">
                <div class="pr-3">EPT : {{$user->profile->ept}}</div>
                <div class="pr-3">IP : {{$user->profile->ip}}</div>
            </div>
            <div class="d-flex">
                <div class="pr-3">Kontak : {{$user->contact}}</div>
                <div class="pr-3">Email : {{$user->email}}</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4 pt-5 pb-4">
            <div>{{$user->profile->experience}}</div>
        </div>
        <div class="col-4 pt-5 pb-4">
            <div>{{$user->profile->desc}}</div>
        </div>
        <div class="col-4 pt-5 pb-4">
            <div>{{$user->profile->bio}}</div>
        </div>
    </div>
    
    <div class="row">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/post/{{ $post->id }}">
                <div><img src="/storage/{{ $post->image }}" class="w-100"></div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
