@extends('layouts.template')

@section('contenido')
    <div>
        <center><h1>Consulta de Compras</h1></center>
        
        <div class="container">
        <form class="d-flex" role="search" action="{{ route('Ccompras') }}" method="GET">
            <input class="form-control me-2" type="text" name="search"  placeholder="Buscar producto" aria-label="Search">
            <button type="button" class="btn btn-outline-success">Buscar</button>
        </form>
 
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Precio</th>
      <th scope="col">Existencia</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Producto1</td>
      <td>100</td>
      <td>12</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Producto2</td>
      <td>50</td>
      <td>6</td>
    </tr>
    
  </tbody>
</table>
    </div>
</div>
@endsection
