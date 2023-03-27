<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{

    protected $table = 'trabajadores'; 
    
    protected $fillable = [
        'name',
        'surname',
        'email',
        'telefono',
        'hobbies'
    ];

    protected $hidden = [];

    use HasFactory;
}
