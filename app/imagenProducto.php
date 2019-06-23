<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagenProducto extends Model
{
    protected $table = "imagenes_producto";
    public $timestamps = false;

    protected $fillable = [
        'id_producto',
        'nombre',
    ];
}
