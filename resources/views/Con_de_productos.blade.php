@extends('layouts.app')

@section('content')
    <h1>Buscar Productos</h1>

    <form action="{{ route('productos.index') }}" method="GET">
        <input type="text" name="search" value="{{ old('search') }}" placeholder="Buscar productos">
        <button type="submit">Buscar</button>
    </form>

    @if ($products->count() > 0)
        <h2>Resultados de la búsqueda:</h2>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - {{ $product->description }}</li>
            @endforeach
        </ul>
    @else
        <p>No se encontraron productos que coincidan con la búsqueda.</p>
    @endif
@endsection
