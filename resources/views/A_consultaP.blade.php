
@extends('layouts.template')

@section('titulo', 'Consulta')

@section('contenido')

    <div class="container col-md-10 mt-4">

        <h1 class="text-center mb-5">Consulta de Productos</h1>
        <!-- Cuadro de búsqueda -->
        <div class="mb-3 col-md-4">
            <input type="text" class="form-control" id="searchInput" placeholder="Buscar por nombre o número de serie">
        </div>

        <!-- Tabla de productos -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Número de Serie</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Costo de Compra</th>
                    <th scope="col">Precio de Venta</th>
                    <th scope="col">Fecha de Ingreso</th>
                    <th scope="col">Fotografía</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody id="productTableBody">
                <tr>
                    <td>Producto1</td>
                    <td>263662626</td>
                    <td>Coca Cola</td>
                    <td>20</td>
                    <td>25$</td>
                    <td>30$</td>
                    <td>22/04/2023</td>
                    <td>...</td>
                    <td>
                            <a href="/editar" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="/eliminar" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                            <a href="/pdf" class="btn btn-success"><i class="bi bi-filetype-pdf"></i></a>
                       
                    </td>

                </tr>
                  
            </tbody>
        </table>
    </div>


@endsection

