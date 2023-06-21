<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LogineRequest;
use App\Http\Requests\RegisterStoreRequest;
use App\Interfaces\AuthRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    private AuthRepositoryInterface $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function index()
    {
        return view('frontend.pages.home');
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function createUser(RegisterStoreRequest $r)
    {
        try {
            $data = [
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)
            ];

            $this->authRepository->storeUser($data);

            return redirect()->route('login');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function login()
    {
        return view("frontend.pages.login");
    }

    public function checkCredentials(LogineRequest $r)
    {
        try {
            $data = [
                'email' => $r->email,
                'password' => $r->password
            ];

            $this->authRepository->validUser($data);

            return redirect()->route('index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function userLogout()
    {
        try {
            $this->authRepository->logOutUser();
            return redirect()->route('index');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
