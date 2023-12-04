<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function productos()
    {
        return view('gestionproductos');
    }

    public function proveedores()
    {
        return view('gestionproveedores');
    }

    public function opcionesCompra()
    {
        return view('gestionopcionesCompra');
    }
}
