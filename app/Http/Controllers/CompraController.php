<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $productos = DB::table('productos')
            ->where('nombre', 'like', "%$search%")
            ->get();

        return view('consultacompras', compact('productos'));
    }
}
