

@extends('layouts.template')

@section('titulo', 'Gestión de Ventas y Compras')

@section('contenido')
<div class="container mt-5">
    <div class="mb-3 col-md-4">
        <button onclick="mostrarSeccion('ventas')" class="btn btn-primary">Ventas</button>
        <button onclick="mostrarSeccion('compras')" class="btn btn-primary">Compras</button>
        
    </div>

    <div id="seccion-ventas" style="display: none;">
    <h2>Tabla de Ventas</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->nombre }}</td>
                    <td>{{ $venta->precio }}</td>
                    <td>
                        @if ($venta->existencia == 1)
                            <span class="stock-indicator in-stock"></span>En Stock
                        @else
                            <span class="stock-indicator out-of-stock"></span>Sin Stock
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    <div id="seccion-compras" style="display: none;">
        <h2>Tabla de Compras</h2>
        
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                    <!-- Agrega otros encabezados según sea necesario -->
                </tr>
            </thead>
            <tbody>
            @foreach($compras as $compra)
                <tr>
                    <td>{{ $compra->nombre }}</td>
                    <td>${{ $compra->precio }}</td>
                    <td>
                    @if ($compra->existencia == 1)
                            <span class="stock-indicator in-stock"></span>En Stock
                        @elseif ($compra->existencia == 0)
                            <span class="stock-indicator out-of-stock"></span>Sin Stock
                        @endif
                    </td>
                    <!-- Agrega otras columnas según sea necesario -->
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function mostrarSeccion(seccion) {
        if (seccion === 'ventas') {
            document.getElementById('seccion-ventas').style.display = 'block';
            document.getElementById('seccion-compras').style.display = 'none';
        } else if (seccion === 'compras') {
            document.getElementById('seccion-ventas').style.display = 'none';
            document.getElementById('seccion-compras').style.display = 'block';
        }
    }
</script>
@endsection
