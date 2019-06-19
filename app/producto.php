<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class producto extends Model
{
    protected $table = 'producto';
    public $timestamps = false;

    protected $fillable = [
    	'id_producto',
    	'nombre_producto',
    	'id_vendedor',
    	'id_disponibilidad',
    	'precio',
    	'unidades',
    	'descripcion',
    	'descuento',
    ];
}
