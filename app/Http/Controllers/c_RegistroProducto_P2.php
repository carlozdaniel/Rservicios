<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Cookie;

use App\categoria;

class c_RegistroProducto_P2 extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
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

        if ($request['descuento']) {

            $producto = producto::create([
            'id_producto' => $request['cod_producto'],
            'nombre_producto' => $request['N_producto'],
            'id_vendedor' => auth()->user()->id,
            'id_disponibilidad' => $request['tip_renta'],
            'precio' => $request['precio'],
            'unidades' => $request['u_producto'],
            'descripcion' => $request['descripcion'],
            'descuento' => $request['descuento'],
            ]); 

        }else{

            $producto = producto::create([
            'id_producto' => $request['cod_producto'],
            'nombre_producto' => $request['N_producto'],
            'id_vendedor' => auth()->user()->id,
            'id_disponibilidad' => $request['tip_renta'],
            'precio' => $request['precio'],
            'unidades' => $request['u_producto'],
            'descripcion' => $request['descripcion'],
            ]); 

        }

        $id_producto = $producto->id_producto;

        for ($i=1; $i < 20; $i++) {
            DB::statement('ALTER TABLE categoria_pro Auto_increment = 1');
            if (Cookie::get('r'.$i) == $i){
                categoria::create([
                'id_categoria' => Cookie::get('r'.$i),
                'id_producto' => $id_producto,
                ]);
            }
        }

        return view('productos.v_ImagenesProducto', compact('id_producto'));
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
