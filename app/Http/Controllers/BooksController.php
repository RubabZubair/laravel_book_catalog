<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function create(){
        return view('books.create');
    }
    public function store(){
        // dd(request()->all());

        $data=request()->validate([
            'book_name' => ['required', 'string', 'max:255'],
            'book_type' => ['required', 'string', 'max:255'],
            'price' => ['required'],
            'description' => ['required', 'string'],
            'book_file' => ['required','mimes:pdf','max:500000'],
            'preview_img'=>['required','mimes:jpg,jpeg,png'],
        ]);
        $file_path=request('book_file')->store('books','public');
        $preview_path=request('preview_img')->store('preview','public');
        auth()->user()->books()->create([
            'book_name' => $data['book_name'],
            'book_type' => $data['book_type'],
            'price' => $data['price'],
            'description' => $data['description'],
            'book_file' => $file_path ,
            'preview_img' => $preview_path,
        ]);
        return redirect('/home');
    }   
}
