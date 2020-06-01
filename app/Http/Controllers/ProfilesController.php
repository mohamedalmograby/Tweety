<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ; 
class ProfilesController extends Controller
{
    public function show(User $user)
    {

    	return view('profile' ,[
    		'user' => $user]); 
    }

    public function edit(User $user)
    {
    	$this->authorize('edit' , $user) ; 
    	return view('profiles.edit');
    }
}
