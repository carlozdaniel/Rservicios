<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tipo_usuario extends Model
{
    protected $table = "role_user";
    public $timestamps = false;

    protected $fillable = [
        'role_id',
        'user_id',
    ];
}
