@extends('layouts.app')

@section('content')
<div class="container" >
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-sm-8 offset-2" style="background: white;border-radius: 5px;padding: 30px;">
                <div class="row">
                    <h4>Edit Profile </h4>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
        
                    <input id="title" type="text" class="form-control 
                        @error('title') is-invalid @enderror" name="title" 
                        value="{{ old('title') ?? $user->profile->title}}" 
                        autocomplete="title" autofocus>
    
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Description</label>
        
                    <input id="description" type="text" class="form-control 
                        @error('description') is-invalid @enderror" name="description" 
                        value="{{ old('description') ?? $user->profile->description }}" 
                        autocomplete="description" autofocus>
    
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">Web link</label>
        
                    <input id="url" type="text" class="form-control 
                        @error('url') is-invalid @enderror" name="url" 
                        value="{{ old('url') ?? $user->profile->url }}" 
                        autocomplete="url" autofocus>
    
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" class="form-control-file" name="image">
    
                    @error('image')
                        <strong style="color: #e3342f;font-size:80%">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </div>
       
       </form>
</div>
@endsection
