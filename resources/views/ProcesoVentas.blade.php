@extends('layouts.template')
@section('titulo', 'Proceso Ventas')

@section('contenido')
    <h1>Sistema de Ventas</h1>

    <h2>Tabla de Productos</h2>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Producto A</td>
                <td>Marca 1</td>
                <td>2</td>
                <td>$10.00</td>
                <td><button>Agregar al Ticket</button></td>
            </tr>
            <tr>
                <td>Producto B</td>
                <td>Marca 2</td>
                <td>3</td>
                <td>$15.00</td>
                <td><button>Agregar al Ticket</button></td>
            </tr>
            
        </tbody>
    </table>

    <h2>Detalles del Ticket</h2>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Producto</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2023-11-06</td>
                <td>Cliente 1</td>
                <td>Producto A</td>
                <td>Marca 1</td>
                <td>2</td>
                <td>$10.00</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>2023-11-07</td>
                <td>Cliente 2</td>
                <td>Producto B</td>
                <td>Marca 2</td>
                <td>3</td>
                <td>$15.00</td>
                <td>$45.00</td>
            </tr>
            
        </tbody>
    </table>

    <h2>Historial de Tickets de Venta</h2>
    <a href="#">Descargar Historial de Tickets en PDF</a>

    <h2>Gestión de Ganancias</h2>
    <form action="#" method="post">
        <label for="mes">Seleccione un mes:</label>
        <select name="mes" id="mes">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            
        </select>
        <button type="submit">Calcular Ganancias</button>
    </form>
    @endsection
