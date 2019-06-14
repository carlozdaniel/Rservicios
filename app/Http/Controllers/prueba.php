<?php

namespace Medios\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
Use Session;
Use Redirect;
Use User;
use Illuminate\Support\Facades\Storage;
use File;

class prueba extends Controller
{

    public function index(Request $request)
    {
    	 if (Auth::check()){
        if($request->User()->hasRole('cliente')){
        }
    }
    	return view('home');
    }
}