<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $user = User::find($name);
        $name = $user->name;
        return view('perfil', ['user' => $user]);
    }


}
