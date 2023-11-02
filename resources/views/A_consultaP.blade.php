
@extends('layouts.template')

@section('titulo', 'Consulta')

@section('contenido')

    <div class="container col-md-6 mt-4">

        <h1 class="text-center mb-5">Consulta de Productos</h1>
        <!-- Cuadro de búsqueda -->
        <div class="mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Buscar por nombre o número de serie">
        </div>

        <!-- Tabla de productos -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Número de Serie</th>
                    <th scope="col">Precio</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <!-- Los registros de productos se cargarán aquí dinámicamente usando JavaScript -->
            </tbody>
        </table>

        <!-- Botones de acción -->
        <div class="mt-3">
            <button class="btn btn-primary" onclick="editarProducto()">Editar Detalles</button>
            <button class="btn btn-success" onclick="generarPDF()">Generar PDF</button>
            {{-- <button class="btn btn-danger" onclick="eliminarProducto()">Eliminar Producto</button> --}}
        </div>
    </div>

    <script>
        // Función para cargar productos dinámicamente (simulado)
        function cargarProductos() {
            // Simulación de datos de productos
            var productos = [
                { nombre: 'Producto 1', serie: '12345', precio: '$100' },
                { nombre: 'Producto 2', serie: '67890', precio: '$150' },
                // ... más productos
            ];

            var tablaBody = document.getElementById('productTableBody');
            productos.forEach(function(producto) {
                var fila = '<tr>';
                fila += '<td>' + producto.nombre + '</td>';
                fila += '<td>' + producto.serie + '</td>';
                fila += '<td>' + producto.precio + '</td>';
                fila += '<td><button class="btn btn-danger" onclick="eliminarProducto(' + producto.serie + ')">Eliminar</button></td>';
                fila += '</tr>';
                tablaBody.innerHTML += fila;
            });
        }

        // Funciones para las acciones de los botones (simulación)
        function editarProducto() {
            // Lógica para editar el producto seleccionado
            console.log('Editar producto');
        }

        function generarPDF() {
            // Lógica para generar el PDF de los productos
            console.log('Generar PDF');
        }

        function eliminarProducto(serie) {
            // Lógica para eliminar el producto con el número de serie especificado
            var confirmacion = confirm('¿Estás seguro de que deseas eliminar el producto con número de serie ' + serie + '?');
            if (confirmacion) {
                // Lógica para eliminar el producto
                console.log('Eliminar producto con número de serie ' + serie);
            }
        }

        // Cargar productos al cargar la página
        window.onload = cargarProductos;
    </script>


@endsection

