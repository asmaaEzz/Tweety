<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    //
    public function store(){
        \request()->validate(['body'=>'required|max:255']);
        Tweet::create([
           'user_id'=>auth()->id(),
           'body'=>\request('body')

        ]);
        return redirect()->route('home');
    }
    public function index()
    {
        return view('tweets.index',[
            'tweets'=>auth()->user()->timeline()
        ]);
    }

}
