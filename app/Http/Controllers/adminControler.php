<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminControler extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
