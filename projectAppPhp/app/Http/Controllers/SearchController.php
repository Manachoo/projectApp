<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function buscar(){
        return view('search');
    }
    public function buscarUsuario(){
        $search_text = $_GET['buscar'];
        $Users = User::where('name', 'like', '%'.$search_text.'%')->get();
        return view('search', compact('Users'));
    }

}
