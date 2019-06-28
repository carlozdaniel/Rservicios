<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class categoria extends Model
{
    protected $table = "categoria_pro";
    public $timestamps = false;

    protected $fillable = [
    	'id_categoria',
    	'id_producto',
    	//..
    ];
}
