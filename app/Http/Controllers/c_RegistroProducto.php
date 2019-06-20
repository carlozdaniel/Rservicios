<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\producto;
use App\categoria;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class c_RegistroProducto extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos.v_Categoria');
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
      $date = date('d-H-Y-i-s-m');
        
           $producto = producto::create([
                'id_producto' => $date,
                'nombre_producto' => 'Prueba',
                'id_vendedor' => 1,
                'id_disponibilidad' => 1,
                'precio' => '200.00',
                'unidades' => 10,
                'descripcion' => 'Nose',
                'descuento' => 20,
            ]);

            $id_producto=$producto->id_producto;

        for ($i=0; $i < 20; $i++) { 

            if ($request['r'.$i] == 1) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 2) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 3) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 4) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 5) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 6) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 7) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 8) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 9) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 10) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 11) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 12) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 13) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 14) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 15) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 16) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 17) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 18) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 19) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }else
            if ($request['r'.$i] == 20) {
                DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
                categoria::create([
                    'id_categoria' => $request['r'.$i],
                    'id_producto' => $id_producto,
                ]);
            }
        }

        return view('Usuarios.v_RegistroProducto', compact('id_producto'));
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
