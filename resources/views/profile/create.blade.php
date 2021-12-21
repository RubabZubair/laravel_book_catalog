@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="/profile"  enctype="multipart/form-data">
                        @csrf


                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description:') }}</label>

                            <div class="col-md-6">
                                <textarea name="description" rows="5" cols="30">
                                </textarea>         

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="row mb-3">
                            <label for="profile_img" class="col-md-4 col-form-label text-md-right">{{ __('Upload profile pic :') }}</label>
                             <div class="col-md-6">
                            <input id="profile_img" type="file" class="form-control @error('profile_img') is-invalid @enderror" name="profile_img"  required  autofocus>

                            @error('profile_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection