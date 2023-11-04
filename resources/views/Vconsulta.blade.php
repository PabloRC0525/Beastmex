
@extends('layouts.template')

@section('titulo', 'Consulta')

@section('contenido')
<div class="container mt-5">
    <div class="mb-3 col-md-4">
      <h2>Buscar Productos</h2>
      <input type="text" class="form-control" id="searchInput" placeholder="Buscar por nombre o marca">
    </div>

    <h2>Tabla de Productos</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Marca</th>
          <th>Precio</th>
          <th>Stock</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Producto 1</td>
          <td>Marca A</td>
          <td>$20.00</td>
          <td>
            <span class="stock-indicator in-stock"></span>En Stock
          </td>
        </tr>
        <tr>
          <td>Producto 2</td>
          <td>Marca B</td>
          <td>$25.50</td>
          <td>
            <span class="stock-indicator out-of-stock"></span>Sin Stock
          </td>
        </tr>
        <!-- Más filas de productos se pueden agregar aquí -->
      </tbody>
    </table>
  </div>

@endsection