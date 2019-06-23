<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Session;
use imagenProducto;

class c_ImagenesProducto extends Controller
{
    public function index(Request $request)
    {
        return view('productos.v_ImagenesProducto');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
    	$image = $request->file('file');
        $imageName = time().$image->getClientOriginalName();
        $upload_success = $image->move(public_path('img_producto'),$imageName);

        //$idss = Cookie::queue('r', 'listo', 10);

        $idss = DB::table('imagenes_producto')->insertGetId(
        ['id_producto' => $request['id'], 'nombre' => $imageName]
        ); 
        
        if ($upload_success) {
            return response()->json($upload_success, 200);
        }
        // Else, return error 400
        else {
            return response()->json('error', 400);
        }


    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
      
    }


    public function destroy($id)
    {
       
    }
}
