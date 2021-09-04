@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
       <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="mb-3" style="background: #fff;padding: 5px 5px 5px 5px;border-radius: 5px;">
                <div class="row">
                   <div class="col-sm-12">
                         <div class="d-flex align-items-center pt-2">
                            <div>
                                <img src="{{ $post->user->profile->ProfileImage() }}" alt="" class="rounded-circle" style="width:50px;border: 1px solid #80808029;">
                            </div>
                            <div class="pl-3">
                                <h6>
                                    <strong>
                                        <a href="/profile/{{ $post->user->id }}" style="text-decoration: none; color:black">{{ $post->user->username }}</a>
                                    </strong>
                                </h6>
                            </div>
                        
                        </div>
                        <div class="pt-2">
                            <p>{{ $post->caption }}</p>
                        </div>
                   </div>    
                       
    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100 rounded">
                        </a>
                    </div>
                 
                </div>
            </div>     
        </div>
        <div class="col-sm-3"></div>
    </div> 
    @endforeach   
</div>
@endsection
