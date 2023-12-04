<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'tb_compras';
    protected $fillable = ['nombre', 'precio', 'existencia'];
}
