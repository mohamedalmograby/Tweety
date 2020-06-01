<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet ; 
class TweetsController extends Controller
{
	    public function index()
    {

        $tweets = auth()->user()->timeline() ; 
        return view('home' , [
            'tweets' =>$tweets
        ]);
    }
    
    public function store()
    {
    	
    	request()->validate(['body' =>'required|max:255']);
    	$tweet = Tweet::create([
    		'user_id'=>auth()->user()->id ,
    		'body'=>Request('body')  
    	]);

    	return redirect(route('home')) ;  
    }
}
