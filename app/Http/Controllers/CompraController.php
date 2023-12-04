<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        return view('comprasindex');
    }

    public function consultacompras(Request $request)
    {
        // Lógica para consultar las compras según la búsqueda
        // Puedes acceder al valor de búsqueda con $request->input('search')

        // Ejemplo de consulta ficticia
        $productos = [
            ['nombre' => 'Producto 1', 'precio' => 100, 'existencia' => 2],
            ['nombre' => 'Producto 2', 'precio' => 400, 'existencia' => 7],
        ];

        return view('comprasindex', ['productos' => $productos]);
    }

    public function consultarComprasPorProducto($nombreProducto)
    {
    // Lógica para consultar compras por producto
    $compras = Compra::whereHas('producto', function ($query) use ($nombreProducto) {
        $query->where('nombre', 'like', '%' . $nombreProducto . '%');})->get();

    // Puedes devolver las compras encontradas o realizar cualquier otra lógica que necesites
    return view('vista_consulta', ['compras' => $compras, 'nombreProducto' => $nombreProducto]);
    }

    public function update($request, string $nombreProducto)
    {

    DB::table('create_compras')->where('nombre', $nombreProducto)->update([
        "nombre"=> $request->input('txtNombre'),
        "precio"=> $request->input('txtPrecio'),
        "existencia"=> $request->input('txtExistencia'),
        "updated_at"=> Carbon::now(),
    ]);
    return redirect('/compras')->with('confirmacion', 'tu producto se a actualizado');
    }
}