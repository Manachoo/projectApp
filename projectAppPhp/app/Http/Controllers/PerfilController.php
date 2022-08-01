<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
{
    public function create()
    {
        return view('perfil');
    }
    /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $user = Perfil::find($name);
        $name = $user->name;
        return view('perfil', ['user' => $user]);
    }


}
