@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historial de Órdenes de Compra</h1>

    <!-- Formulario de consulta -->
    <form action="/ordenes/historial" method="GET">
        <div class="form-group">
            <label for="consulta_nombre">Nombre del comprador</label>
            <input type="text" id="consulta_nombre" name="consulta_nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="consulta_fecha">Fecha de la orden</label>
            <input type="date" id="consulta_fecha" name="consulta_fecha" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Consultar</button>
    </form>

    <!-- Tabla de órdenes -->
    <table class="table">
        <thead>
            <tr>
            <th>Nombre del comprador</th>
                <th>Correo del comprador</th>
                <th>Productos</th>
                <th>Fecha de la orden</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordenes as $orden)
            <tr>
                <td>{{ $orden->nombre }}</td>
                <td>{{ $orden->correo }}</td>
                <td>{{ $orden->productos }}</td>
                <td>{{ $orden->fecha }}</td>
                <td>
                    <a href="#">Descargar</a> <!-- Agrega la lógica de descarga aquí -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection