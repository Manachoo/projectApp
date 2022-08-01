<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    public $table = 'perfil';

    protected $fillable = [
        'name',
        'lastname',
        'rut',
        'email',
        'contact',
        'direction',
        'email_verified_at',
    ];
}
