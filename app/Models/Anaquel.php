<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anaquel extends Model
{
    protected $table = 'anaqueles';
    protected $fillable = ['numero'];
    use HasFactory;
}
