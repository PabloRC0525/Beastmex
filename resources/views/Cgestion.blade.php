
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
        <form>
          <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" required>
          </div>
          <div class="mb-3">
            <label for="cantidad">Cantidad:</label>
            <input type="number" class="form-control" id="cantidad" required>
          </div>
          <div class="mb-3">
            <label for="precio">Precio:</label>
            <input type="number" class="form-control" id="precio" required>
          </div>
          <div class="mb-3">
            <label for="proveedor">Proveedor:</label>
            <input type="text" class="form-control" id="proveedor" required>
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

@endsection