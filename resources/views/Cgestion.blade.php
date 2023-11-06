
@extends('layouts.template')

@section('titulo', 'Gestión')

@section('contenido')
 
<div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mb-4">
        <h2>Tabla de Productos</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Cantidad</th>
              <th>Proveedor</th>
            </tr>
          </thead>
          <tbody>
            <!-- Contenido de la tabla de productos -->
          </tbody>
        </table>
      </div>
      <div class="col-md-6 mb-4">
        <h2>Formulario</h2>
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

    <div class="row">
      <div class="col-md-6">
        <h2>Opciones de Compra</h2>
        <button class="btn btn-primary mb-3">Agregar Nuevo Producto</button>
        <button class="btn btn-success mb-3">Realizar Pedido a Proveedor</button>
      </div>
      <div class="col-md-6">
        <h2>Tabla de Proveedores</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Correo Electrónico</th>
              <th>Teléfono</th>
            </tr>
          </thead>
          <tbody>
            <!-- Contenido de la tabla de proveedores -->
          </tbody>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <button class="btn btn-warning">Editar Proveedor</button>
        <button class="btn btn-success">Agregar Proveedor</button>
        <button class="btn btn-danger">Eliminar Proveedor</button>
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