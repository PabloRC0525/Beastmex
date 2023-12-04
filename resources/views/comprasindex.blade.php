@extends('layouts.template')

@section('contenido')
<div class="container">
    <div>
        <center><h1 class="mt-4">Consulta de Compras</h1></center>

        <form class="d-flex mt-3" role="search" action="{{ route('Ccompras') }}" method="GET">
            <input class="form-control me-2" type="text" name="search" placeholder="Buscar producto" aria-label="Search">
            <button type="submit" class="btn btn-outline-success">Buscar</button>
        </form>

        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Existencia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Producto1</td>
                    <td>100</td>
                    <td>12</td>
                    <td>
                    <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    <button type="button" class="btn btn-outline-warning">Editar</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Producto2</td>
                    <td>50</td>
                    <td>6</td>
                    <td>
                    <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    <button type="button" class="btn btn-outline-warning">Editar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
