<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\ProfileModel;
class startup extends Controller
{
    //
    public function welcome(){
        $authors=ProfileModel::all();
       $books=Books::all();
        return view('welcome', compact('books','authors'));
    
    }
}
