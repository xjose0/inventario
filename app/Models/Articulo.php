<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'cantidad', 'anaquel_id'];
    protected $table = 'articulos';
    use HasFactory;
}
