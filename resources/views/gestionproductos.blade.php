@extends('layouts.template')

@section('titulo', 'Gestión')

@section('contenido')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
            <h2 class="text-center text-danger mb-4">Agregar Producto</h2>
            
            {{-- Mostrar mensaje de éxito --}}
            @if(session('confirmacion'))
                <div class="alert alert-success" role="alert">
                    {{ session('confirmacion') }}
                </div>
            @endif
            
            <form method="GET" action="/gestion/productos">
                @csrf
                <div class="mb-3">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="txtNombre" class="form-control" id="nombre" value="{{old('txtNombre')}}">
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtNombre')}}</strong></p>
                </div>
                <div class="mb-3">
                    <label for="cantidad">Cantidad:</label>
                    <input type="text" name="txtCantidad" class="form-control" id="cantidad" value="{{old('txtCantidad')}}">
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtCantidad')}}</strong></p>
                </div>
                <div class="mb-3">
                    <label for="precio">Precio:</label>
                    <input type="text" name="txtPrecio" class="form-control" id="precio" value="{{old('txtPrecio')}}">
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtPrecio')}}</strong></p>
                </div>
                <div class="mb-3">
                    <label for="proveedor">Proveedor:</label>
                    <p class="fw-semibold text-danger"><strong>{{$errors->first('txtProveedor')}}</strong></p>
                    <input type="text" name="txtProveedor" class="form-control" id="proveedor" value="{{old('txtProveedor')}}">
                </div>
            </form>

            {{-- Formulario para agregar compra --}}
            <form method="POST" action="{{ route('agregarCompra') }}">
                @csrf
                <!-- Campos del formulario para la compra -->
                <button type="submit" class="btn btn-primary btn-block">Agregar Compra</button>
            </form>
        </div>
    </div>
</div>
@endsection
