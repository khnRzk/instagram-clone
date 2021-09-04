@extends('layouts.app')

@section('content')
<div class="container" style="width: 50%;">
   <div class="row mb-2" style="background: rgb(255 255 255 / 54%);padding: 12px;border-radius: 5px;">
       <div class="col-sm-3 p-3">
            <img src="{{ $user->profile->ProfileImage() }}" class="rounded-circle" width="70%" >
       </div>
       <div class="col-sm-9">
           <div class="d-flex pb-2">
               <h4 class="pr-5" style="margin-bottom: 0px">{{ $user->username }}</h4>
               <follow-button user-id="{{ $user->id }}" follows ="{{ $follows }}"></follow-button>
               @can('update', $user->profile)
                    <a class="btn btn-secondary btn-sm" href="/profile/{{ $user->id }}/edit">Edit Profile</a>
               @endcan   
           </div>
           <div class="d-flex pb-3">
                <div class="pr-5"><strong>{{ $postCount }}</strong> Posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> Followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> Following</div>
           </div>
          
           <div>
               <span><b>{{ $user->profile->title }}</b></span>
               <p>
                {{ $user->profile->description  }}
               </p>
           </div>
           <div>
               <a href="" style="text-decoration: none">{{ $user->profile->url }}</a>
           </div>
           @can('update', $user->profile)
            <div class="float-right">
                <a class="btn btn-primary btn-sm" href="/p/create">Add new post</a>
            </div>   
           @endcan
          
       </div>
   </div>
   <div class="row pt-3" style="background: rgb(255 255 255 / 54%);padding: 12px;border-radius: 5px;">

    @foreach ($user->posts as $post)
    <div class="col-sm-4" style="padding:1px">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </a>
        
    </div> 
    @endforeach
       
       

   </div>
</div>
@endsection
