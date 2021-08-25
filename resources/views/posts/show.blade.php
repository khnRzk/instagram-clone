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
                        <h5>{{ $post->user->username }}</h5>
                        <p>{{ $post->caption }}</p>
                    </div>
                </div>
            </div>     
        </div>
        <div class="col-sm-2"></div>
    </div>
    
</div>
@endsection
