<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Direccion;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuario'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telefono' => ['required', 'string', 'max:10', 'min:1'],

            'ciudad' => ['required', 'string', 'max:255'],
            'colonia' => ['required', 'string', 'max:255'],
            'calle' => ['required', 'string', 'max:255'],
            'codigo_postal' => ['required', 'string', 'max:255'],

            'tipo' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $request)
    {
         DB::statement('ALTER TABLE usuario Auto_increment = 1');
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
        Role::create([
            'user_id' => $id_user,
            'role_id' => $request['tipo'],
        ]);

       return redirect()->action('HomeController@index');
    }
}
