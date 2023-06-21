<?php

namespace App\Repositories;

use App\Interfaces\AuthRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    public function storeUser(array $credentails)
    {
        return User::create($credentails);
    }

    public function validUser(array $credentails)
    {
        return Auth::attempt($credentails);
    }

    public function logOutUser()
    {
        return Auth::logout();
    }
}
