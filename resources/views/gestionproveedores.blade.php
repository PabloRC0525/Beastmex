@extends('layouts.template')

@section('titulo', 'Gestión de Proveedores')

@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Tabla de Proveedores</h2>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach ($consulProveedor as $proveedor)
                    <tr>
                        <td>{{ $proveedor->nombrepro }}</td>
                        <td>{{ $proveedor->correo }}</td>
                        <td>{{ $proveedor->telefono }}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{ $proveedor->id }}">
                                Editar
                            </button>
                            <button href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarProveedor{{ $proveedor->id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('partials.modal')
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                <button class="btn btn-success btn-agregar">Agregar Proveedor</button>
            </div>
        </div>
    </div>
</div>
    

@endsection
