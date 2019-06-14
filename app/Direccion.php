<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Direccion extends Model
{

    protected $table = "direccion";
    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'ciudad',
        'colonia',
        'calle',
        'codigo_postal',
    ];
}
