@extends('layouts.app')

@section('content')
    <h1>Orden de Compra #{{ $orden->numero_orden }}</h1>

    <p>Fecha de Compra: {{ $orden->fecha_compra }}</p>
    <p>Producto: {{ $orden->nombre_producto }}</p>
    <p>Cantidad: {{ $orden->cantidad }}</p>
    <p>Correo Electrónico para Envío: {{ $orden->email }}</p>

    <!-- Aquí puedes mostrar más detalles de la orden de compra si es necesario -->

    <a href="{{ route('buscar-ordenes') }}" class="btn btn-primary">Volver al Historial</a>

    <a href="{{ route('descargar-orden-pdf', $orden->id) }}" class="btn btn-success">Descargar como PDF</a>
</div>
@endsection
