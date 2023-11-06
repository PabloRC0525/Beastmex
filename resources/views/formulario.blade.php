@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Formulario de Orden de Compra</h1>

    <form action="/ordenes/enviar" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del comprador</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>

        <div class="form-group">
            <label for="correo">Correo del comprador</label>
            <input type="email" id="correo" name="correo" class="form-control">
        </div>

        <div class="form-group">
            <label for="productos">Productos</label>
            <textarea id="productos" name="productos" class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar Orden</button>
    </form>
</div>
@endsection
