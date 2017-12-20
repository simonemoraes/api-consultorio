<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PacienteModel extends Model
{
    protected $fillable =[
        'nome',
        'email',
        'tefone'
    ];

    
}
