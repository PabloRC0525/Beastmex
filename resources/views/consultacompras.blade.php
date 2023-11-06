@extends('layouts.template')

@section('contenido')
    <h1>Consulta de Compras</h1>

    <form action="{{ route('Ccompras') }}" method="GET">
        <input type="text" name="search" placeholder="Buscar por nombre">
        <button type="submit">Buscar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        
        </thead>
        <tbody>
           
                <tr>
                    <td>Producto 1 </td>
                    <td>100 </td>
                    <td>  2 </td>
                </tr>
                <tr>
                    <td>Producto 2 </td>
                    <td>400 </td>
                    <td>  7 </td>
                </tr>
       
        </tbody>
    </table>
</div>
@endsection