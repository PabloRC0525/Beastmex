<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenCompra; // Asegúrate de importar el modelo adecuado
use Illuminate\Support\Facades\Validator;

class OrdenCompraController extends Controller
{
    public function formulario()
    {
        return view('ordenes.formulario');
    }

    public function guardar(Request $request)
    {
        // Validación de entrada
        $validator = Validator::make($request->all(), [
            'nombre_producto' => 'required|string|max:255',
            'cantidad' => 'required|integer',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crear y guardar la orden de compra
        $ordenCompra = new OrdenCompra();
        $ordenCompra->nombre_producto = $request->input('nombre_producto');
        $ordenCompra->cantidad = $request->input('cantidad');
        $ordenCompra->email = $request->input('email');
        $ordenCompra->save();

        return redirect()->route('ordenes-compra')->with('success', 'Orden de compra creada exitosamente');
    }

    public function buscar(Request $request)
    {
        $fecha = $request->input('buscar');

        // Realiza la búsqueda de órdenes de compra por fecha y obtén los resultados
        $ordenesCompra = OrdenCompra::whereDate('created_at', $fecha)->get();

        return view('ordenes.historial', compact('ordenesCompra'));
    }

    public function descargar($id)
    {
        // Recupera la orden de compra por su ID
        $orden = OrdenCompra::findOrFail($id);

        // En esta vista, debes mostrar los detalles de la orden de compra
        return view('ordenes.descargar-orden', compact('orden'));
    }
}
