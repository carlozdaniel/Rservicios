<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
Use Session;
Use Redirect;
Use User;
use Illuminate\Support\Facades\Storage;
use File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

      $request->user()->authorizeRoles(['cliente', 'arrendatario']);

      if (Auth::check()){

         if($request->user()->hasRole('cliente'))
         {
            return view('v_Principal');
         }
         if($request->user()->hasRole('arrendatario')){
            return view('v_Principal');
         }
      }
    }
}
