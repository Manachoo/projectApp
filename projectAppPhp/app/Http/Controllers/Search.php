<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Search extends Controller
{
    //
    public function index()
    {
        return view('Search');
    }
    public function store(Request $request)
    {
        $search = $request->search;
        $users = User::where('name', 'like', '%' . $search . '%')->get();
        return view('Search', compact('users'));
    }
    
}
