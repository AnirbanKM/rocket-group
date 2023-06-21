<?php

namespace App\Interfaces;

interface AuthRepositoryInterface
{
    public function storeUser(array $credentails);
    public function validUser(array $credentails);
    public function logOutUser();
}
