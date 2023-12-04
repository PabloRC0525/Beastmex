<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class GraficosAdminController extends Controller
{
    public function informes()
    {
        // Obtener datos para la tabla de ganancias por producto
        $productos = Producto::where('estatus', 'activo')->get();

        // Obtener datos para el gráfico de ventas mensuales
        $labels = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'];
        $ventasMensuales = [12, 19, 3, 5, 2, 3]; // Reemplaza con tus datos reales

        // Obtener datos para el gráfico de ganancias anuales
        $labelsGananciasAnuales = ['2020', '2021', '2022', '2023'];
        $gananciasAnuales = [20000, 30000, 40000, 45000]; // Reemplaza con tus datos reales

        return view('informes.informes', compact('productos', 'labels', 'ventasMensuales', 'labelsGananciasAnuales', 'gananciasAnuales'));
    }
}
