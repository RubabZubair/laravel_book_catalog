@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Books') }}</div>

                <div class="card-body">
                    <form method="POST" action="/books"  enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="book_name" class="col-md-4 col-form-label text-md-right">{{ __('Book Name') }}</label>

                            <div class="col-md-6">
                                <input id="book_name" type="text" class="form-control @error('book_name') is-invalid @enderror" name="book_name" value="{{ old('book_name') }}" required autocomplete="book_name" autofocus>

                                @error('book_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="book_type" class="col-md-4 col-form-label text-md-right">{{ __('Book Type') }}</label>

                            <div class="col-md-6">
                                <input id="book_type" type="text" class="form-control @error('book_type') is-invalid @enderror" name="book_type" value="{{ old('book_type') }}" required autocomplete="book_type" autofocus>

                                @error('book_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price:') }}</label>

                            <div class="col-md-6">
                            <input id="price" type="number" min=0 max=10000 class="form-control @error('price')
                             is-invalid @enderror" name="price" value="{{ old('price') }}" 
                             required autocomplete="price" autofocus>

                            @error('price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="book_file" class="col-md-4 col-form-label text-md-right">{{ __('Upload file:') }}</label>

                            <div class="col-md-6">
                            <input id="book_file" type="file" class="form-control @error('book_file') is-invalid @enderror" name="book_file" value="{{ old('book_file') }}" required  autofocus>

                            @error('book_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                        <div class="row mb-3">
                            <label for="preview_img" class="col-md-4 col-form-label text-md-right">{{ __('Upload preview :') }}</label>

                            <div class="col-md-6">
                            <input id="preview_img" type="file" class="form-control @error('preview_img') is-invalid @enderror" name="preview_img"  required  autofocus>

                            @error('preview_img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>


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