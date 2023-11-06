@extends('layouts.app')

@section('content')
    <h1>Historial de Órdenes de Compra</h1>

    <form action="{{ route('buscar-ordenes') }}" method="GET">
        <div class="form-group">
            <label for="buscar">Buscar por fecha:</label>
            <input type="date" name="buscar" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Número de Orden</th>
                <th>Fecha de Compra</th>
                <th>Descargar Orden</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ordenesCompra as $orden)
                <tr>
                    <td>{{ $orden->numero_orden }}</td>
                    <td>{{ $orden->fecha_compra }}</td>
                    <td>
                        <a href="{{ route('descargar-orden', $orden->id) }}" class="btn btn-success">Descargar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
