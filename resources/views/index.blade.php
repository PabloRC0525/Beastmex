@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Compras</h1>
        <form method="post" action="/compras/buscar">
            @csrf
            <input type="text" name="nombre" placeholder="Buscar por nombre">
            <button type="submit">Buscar</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Existencia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>
                            @if ($producto->existencia < 2)
                                <span style="color: red;">{{ $producto->existencia }}</span>
                            @else
                                {{ $producto->existencia }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
