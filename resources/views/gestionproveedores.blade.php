@extends('layouts.template')

@section('titulo', 'Gestión de Proveedores')

@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Tabla de Proveedores</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de proveedor -->
                    <tr>
                        <td>Proveedor1</td>
                        <td>proveedor1@example.com</td>
                        <td>123-456-7890</td>
                        <td>
                            <button class="btn btn-warning btn-editar">Editar</button>
                            <button class="btn btn-danger btn-eliminar">Eliminar</button>
                        </td>
                    </tr>
                    <!-- Fin del ejemplo -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="row content-mt-3">
        <div class="col-md-4">
            <button class="btn btn-success btn-block btn-agregar">Agregar Proveedor</button>
        </div>
    </div>
</div>
@endsection
