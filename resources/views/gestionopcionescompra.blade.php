@extends('layouts.template')

@extends('layouts.template')

@section('titulo', 'Opciones de Compra')

@section('contenido')
<div class="container mt-5">
    <h2 class="text-center mb-4">Opciones de Compra</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>Producto1</td>
                <td>10</td>
                <td>Proveedor1</td>
                <td>
                    <button class="btn btn-primary btn-comprar">Comprar</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
