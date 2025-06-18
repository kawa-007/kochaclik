<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades'; 

    protected $fillable = ['nombre', 'descripcion', 'fecha', 'lugar_id'];
}