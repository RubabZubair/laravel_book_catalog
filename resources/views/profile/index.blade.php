@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-3 p-5 ">
            @if(Auth::user()->profile !== null)
                <img src={{'/storage/'.Auth::user()->profile->profile_img}} alt="writer Image" class="customImage" />
            @else
            <img src="/images/writerImg.jpeg" alt="writer Image" class="customImage" />
            @endif    
        </div>
        <div class="col-9 p-5" >
            <div>
                <h1 style="text-decoration:none">{{Auth::user()->username}}</h1>
                
            </div>
            @if(Auth::user()->profile !== null)
            <div>
                    <p>{{Auth::user()->profile->description}}</p>
            </div>
            @else
                <a href="/profile/create" class="btn custom-button">Edit profile</a>
            @endif
            <br>
            <div>
                <a href="/books/create" class="btn custom-button">Add new Book</a>
            </div>
        </div>
    </div>
    @if (Auth::user()->books !== null)
        <div class="row justify-content-center mt-5">
            @foreach (Auth::user()->books as $book )        
            <div class="col-lg-3 bookCard" >
                <a href={{'/storage/'.$book->book_file}}>
                <img src={{'/storage/'.$book->preview_img}}  height="250px"></img>
                </a>
                 <h4>{{ $book->book_name}}</h4>
                <p>{{ $book->description}} </p>  
            </div>

            @endforeach
        </div>
    @endif


</div>
@endsection
