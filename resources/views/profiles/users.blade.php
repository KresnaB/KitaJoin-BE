@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($profiles as $profile)
    <div class="row">
        <div class="col-3 pt-5">
            <img src="{{$profile->profileImage()}}" class="rounded-circle w-100" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <a href="/profile/{{$profile->user->id}}"><h3>{{ $profile->user->name }}</h3></a>
                
            </div>
            <div class="d-flex">
                <div class="pr-3">memiliki minat : {{$profile->interest}}</div>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection