@extends('layouts.app')

@section('content')
    <h1>Consulta de Compras</h1>

    <form action="{{ route('consultacompras') }}" method="GET">
        <input type="text" name="search" placeholder="Buscar por nombre">
        <button type="submit">Buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td @if($producto->existencia < 2) class="alert-danger" @endif>{{ $producto->existencia }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection