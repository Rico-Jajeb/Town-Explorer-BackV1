<?php


namespace App\Services;

use App\Models\User;
class DisplayUserService
{
 
    public function getUserData()
    {
        return User::all();
    }

}
