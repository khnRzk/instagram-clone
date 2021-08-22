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
               <button class="btn btn-primary btn-sm mr-1"> Follow</button>
               <button class="btn btn-primary btn-sm">Add new post</button>
           </div>
           <div class="d-flex pb-3">
                <div class="pr-5"><strong>123</strong> Posts</div>
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
       <div class="col-sm-4">
           <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" class="w-100">
       </div>
       <div class="col-sm-4">
            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" class="w-100">
        </div>
        <div class="col-sm-4">
            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29kaW5nfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80" class="w-100">
        </div>

   </div>
</div>
@endsection
