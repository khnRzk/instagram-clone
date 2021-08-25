@extends('layouts.app')

@section('content')
<div class="container" style="width: 50%;">
   <div class="row">
       <div class="col-sm-3 p-3">
            <img src="https://www.freecodecamp.org/news/content/images/2021/05/freecodecamp-org-gravatar.jpeg" class="rounded-circle" width="70%" >
       </div>
       <div class="col-sm-9">
           <div class="d-flex pb-2">
               <h4 class="pr-5">{{ $user->username }}</h4>
               <button class="btn btn-primary mr-1"> Follow</button>
               <a class="btn btn-primary" href="/p/create">Add new post</a>
           </div>
           <div class="d-flex pb-3">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> Posts</div>
                <div class="pr-5"><strong>123</strong> Followers</div>
                <div class="pr-5"><strong>123</strong> Following</div>
           </div>
           <div>
               <span><b>{{ $user->profile->title ?? 'Hi' }}</b></span>
               <p>
                {{ $user->profile->description ?? 'Hi' }}
               </p>
           </div>
           <div>
               <a href="" style="text-decoration: none">{{ $user->profile->url ?? 'Hi'  }}</a>
           </div>
       </div>
   </div>
   <hr>
   <div class="row pt-3">

    @foreach ($user->posts as $post)
    <div class="col-sm-4 pb-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </a>
        
    </div> 
    @endforeach
       
       

   </div>
</div>
@endsection
