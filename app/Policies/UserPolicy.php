<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;



    public function edit(User $currernt_user , User $user)
    {
        return $currernt_user->is($user) ; 
    }
}
