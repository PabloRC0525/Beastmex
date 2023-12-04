<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Venta;
use Illuminate\Support\Facades\DB;


class Vcomprasventas extends Controller
{
    public function mostrarCompras()
    {
        $compras = Compra::all();
        $ventas = Venta::all(); // Obtén los datos de ventas, incluso si no los estás utilizando aquí
        return view('Vgerencia', compact('compras', 'ventas'));
    }

    public function mostrarVentas()
    {
        $compras = Compra::all(); // Obtén los datos de compras, incluso si no los estás utilizando aquí
        $ventas = Venta::all();
        return view('Vgerencia', compact('compras', 'ventas'));
    }
  
}


