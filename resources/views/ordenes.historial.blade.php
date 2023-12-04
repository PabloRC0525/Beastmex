@extends('layouts.template')
@section('contenido')
    <center><h1>Historial de Órdenes de Compra</h1></center>
    <div class="container">
    <form>
        <div class="d-flex">
            <label for="buscar">Buscar por fecha:</label>
            <input type="date" name="buscar" class="form-control">
            <button type="date" class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Número de Orden</th>
                <th>Fecha de Compra</th>
                <th>Descargar Orden</th>
            </tr>
        </thead>
        <tbody>
         
                <tr>
                    <td>1</td>
                    <td>06/11</td>
                    <td>
                        <a  class="btn btn-success">Descargar</a>
                        </td>
                </tr>
           
        </tbody>
    </table>
</div>
</div>
@endsection
