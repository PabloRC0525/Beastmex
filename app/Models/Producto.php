<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'tb_productos';
    protected $fillable = ['nombre', 'numeroSerie', 'marca', 'cantidad', 'costoCompra', 'fechaI', 'foto', 'precioV', 'estatus'];
}
