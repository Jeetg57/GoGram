@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Caption') }}</label>
                    <input id="caption" name="caption" type="text"
                        class="form-control @error('caption') is-invalid @enderror" caption="caption"
                        value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Image') }}</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @error('image')
                    <strong style="color: #e3342f; font-size: 80%;">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection