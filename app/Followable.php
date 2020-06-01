<?php

namespace App;  

trait Followable{


    public function follow(User $user)
    {
        return $this->follows()->save($user); 
    }

    public function unfollow(User $user)
    {
    	return $this->follows()->detach($user) ; 
    }


    public function toggleFollow(User $user)
    {
    	if($this->isFollowing($user)){
    		return $this->unfollow($user) ; 
    	}
    	else{
    		return $this->follow($user) ;
    	}
    }

    public function follows()
    {

        return $this->belongsToMany(User::class ,'follows' ,  'user_id' , 'following_user_id'); 
    }
    public function isFollowing(User $user){
        return $this->follows->contains($user) ; 
    }
}