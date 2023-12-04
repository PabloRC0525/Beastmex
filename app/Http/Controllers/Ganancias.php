<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Compra;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB as bb;

class Ganancias extends Controller
{

    public function __construct()
    {
        // Puedes colocar la lógica de cálculo de ganancias totales aquí
        $this->middleware(function ($request, $next) {
            $this->gananciasTotales = bb::table('tb_productos')->sum(bb::raw('cantidad * precioV'));
            return $next($request);
        });
    }
    public function informes()
    {
        // Obtener datos para la tabla de ganancias por producto
        $productos = Producto::where('estatus', 'activo','No activo')->get();

        // Obtener datos para el gráfico de ventas mensuales
        $labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
        $ventasMensuales = [12, 19, 3, 5, 2, 3]; // Reemplaza con tus datos reales

        // Obtener datos para el gráfico de ganancias anuales
        $labelsGananciasAnuales = ['2020', '2021', '2022', '2023'];
        $gananciasAnuales = [20000, 30000, 40000, 45000]; // Reemplaza con tus datos reales

        // Cálculo de ganancias totales
        $gananciasTotales = DB::table('tb_productos')->sum(DB::raw('cantidad * precioV'));

        return view('Ganancias', compact('productos', 'labels', 'ventasMensuales', 'labelsGananciasAnuales', 'gananciasAnuales', 'gananciasTotales'));
    }

}
