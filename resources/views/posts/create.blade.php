@extends('layouts.app')

@section('content')
<div class="container">
   <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8 offset-2" style="background: white;border-radius: 5px;padding: 30px;">
            <div class="row">
                <h4>Add new post</h4>
            </div>
            <div class="form-group row">
                <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
    
                <input id="caption" type="text" class="form-control 
                    @error('caption') is-invalid @enderror" name="caption" 
                    value="{{ old('caption') }}" 
                    autocomplete="caption" autofocus>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row">
                <label for="image" class="col-md-4 col-form-label">Post Image</label>
                <input type="file" class="form-control-file" name="image">

                @error('image')
                    <strong style="color: #e3342f;font-size:80%">{{ $message }}</strong>
                @enderror
            </div>
            <div class="row pt-4">
                <button type="submit" class="btn btn-primary">Add Post</button>
            </div>
        </div>
    </div>
   
   </form>
</div>
@endsection
