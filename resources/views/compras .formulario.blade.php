@extends('layouts.app')

@section('content')
    <h1>Formulario de Órdenes de Compra</h1>

    <form action="{{ route('guardar-orden') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_producto">Nombre del Producto</label>
            <input type="text" name="nombre_producto" class="form-control">
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico para Envío</label>
            <input type="email" name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar Orden</button>
    </form>
</div>
@endsection