<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    public $table = 'comentarios';

    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function post(){
        return $this->belongsTo('App\Models\Perfil','perfil_id');
    }
}
