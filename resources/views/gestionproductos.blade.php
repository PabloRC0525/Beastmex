@extends('layouts.template')

@section('titulo', 'Gestión')

@section('contenido')
 
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mb-4">
        <h2>Agregar Producto</h2>
        <form method="POST" action="/AgregarProducto">
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
          <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
      </div>
    </div>
</div>
</div>

  <script>
    // Muestra SweetAlert cuando el mensaje de confirmación está presente en la sesión
    @if(session('confirmacion'))
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session('confirmacion') }}',
            icon: 'success',
            confirmButtonText: 'Aceptar'
        });
    @endif
  </script>
@endsection 