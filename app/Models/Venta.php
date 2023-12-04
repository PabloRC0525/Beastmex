<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'tb_ventas';
    protected $fillable = ['nombre', 'precio', 'existencia'];
}
