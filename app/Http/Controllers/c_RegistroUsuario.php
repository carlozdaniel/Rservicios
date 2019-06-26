<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direccion;
use App\User;
use App\Role;
use App\Tipo_usuario;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class c_RegistroUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Usuarios.v_RegistroUsuario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
        'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telefono' => ['required', 'string', 'max:10', 'min:10'],

            'ciudad' => ['required', 'string', 'max:255'],
            'colonia' => ['required', 'string', 'max:255'],
            'calle' => ['required', 'string', 'max:255'],
            'codigo_postal' => ['required', 'string', 'max:5', 'min:5'],

            'tipo' => ['required', 'string', 'max:255'],
        ]);

        DB::statement('ALTER TABLE users Auto_increment = 1');
        $usuario = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'telefono' => $request['telefono'],
        ]);

        $id_user=$usuario->id;

        DB::statement('ALTER TABLE direccion Auto_increment = 1');
        Direccion::create([
            'id_usuario' => $id_user,
            'ciudad' => $request['ciudad'],
            'colonia' => $request['colonia'],
            'calle' => $request['calle'],
            'codigo_postal' => $request['codigo_postal'],
        ]);

        DB::statement('ALTER TABLE role_user Auto_increment = 1');
        Tipo_usuario::create([
            'user_id' => $id_user,
            'role_id' => $request['tipo'],
        ]);

         return redirect()->action('HomeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
