<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(){
        $user = user::create(request(['rut','nombre','email','password']));
        auth()->login($user);
        return redirect()->to('/');
    }
}
