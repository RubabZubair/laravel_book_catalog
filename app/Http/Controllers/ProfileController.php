<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('profile.create');
    }
    public function store(){

        $data=request()->validate([
            'description' => ['required', 'string'],
            'profile_img'=>['required','mimes:jpg,jpeg,png'],
        ]);
        $profile_path=request('profile_img')->store('preview','public');
        auth()->user()->profile()->create([
            'description' => $data['description'],
            'profile_img' => $profile_path,
        ]);
        return redirect('/home');
    }
}
