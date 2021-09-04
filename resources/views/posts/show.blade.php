@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div style="background: #fff;padding: 5px 5px 5px 5px;border-radius: 5px;display:flex">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="/storage/{{ $post->image }}" class="w-100 rounded">
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center pt-2">
                            <div>
                                <img src="{{ $post->user->profile->ProfileImage() }}" alt="" class="rounded-circle" style="width:50px">
                            </div>
                            <div class="pl-3">
                                <h6>
                                    <strong>
                                        <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color:black">{{ $post->user->username }}</a>
                                    </strong> | 
                                    <strong><a href="#">Follow</a></strong>
                                </h6>
                            </div>
                            <div>
                                
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p><span><strong><a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color:black">{{ $post->user->username }}</a></strong></span> {{ $post->caption }}</p>
                        </div>
                    </div>
                </div>
            </div>     
        </div>
        <div class="col-sm-2"></div>
    </div>
    
</div>
@endsection
