@extends('layouts.template')

@section('titulo', 'Consulta')

@section('contenido')
<div class="container mt-5">
    <div class="mb-3 col-md-4">
      <button onclick="mostrarSeccion('ventas')" class="btn btn-primary">Ventas</button>
      <button onclick="mostrarSeccion('compras')" class="btn btn-secondary">Compras</button>
      <input type="text" class="form-control" id="searchInput" placeholder="Buscar por nombre o marca">
    </div>

    <div id="seccion-ventas" style="display: block;">
        <h2>Tabla de Ventas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto Venta 1</td>
                    <td>Marca Venta A</td>
                    <td>$20.00</td>
                    <td>
                        <span class="stock-indicator in-stock"></span>En Stock
                    </td>
                </tr>
                <tr>
                    <td>Producto Venta 2</td>
                    <td>Marca Venta B</td>
                    <td>$25.50</td>
                    <td>
                        <span class="stock-indicator out-of-stock"></span>Sin Stock
                    </td>
                </tr>
                <!-- Agrega más filas de productos de ventas aquí -->
            </tbody>
        </table>
    </div>

    <div id="seccion-compras" style="display: none;">
        <h2>Tabla de Compras</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto Compra 1</td>
                    <td>Marca Compra A</td>
                    <td>$30.00</td>
                    <td>
                        <span class="stock-indicator in-stock"></span>En Stock
                    </td>
                </tr>
                <tr>
                    <td>Producto Compra 2</td>
                    <td>Marca Compra B</td>
                    <td>$35.50</td>
                    <td>
                        <span class="stock-indicator out-of-stock"></span>Sin Stock
                    </td>
                </tr>
                <!-- Agrega más filas de productos de compras aquí -->
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
