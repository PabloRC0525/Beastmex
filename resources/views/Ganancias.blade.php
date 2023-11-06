@extends('layouts.template')

@section('titulo', 'Informes de Ventas y Ganancias')

@section('contenido')
<div class="container mt-5">
    <h1>Informes de Ventas y Ganancias</h1>

    <div class="row">
        <div class="col-md-6">
            <h2>Ventas Mensuales</h2>
            <canvas id="ventasChart" style="height: 400px;"></canvas>
        </div>
        <div class="col-md-6">
            <h2>Ganancias Anuales</h2>
            <canvas id="gananciasChart" style="height: 400px;"></canvas>
        </div>
    </div>

    <div class="mt-5">
        <h2>Ganancias por Producto</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Ganancia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Producto A</td>
                    <td>$5000</td>
                </tr>
                <tr>
                    <td>Producto B</td>
                    <td>$3000</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Configuración de datos para el gráfico de ventas mensuales
    var ctx1 = document.getElementById('ventasChart').getContext('2d');
    var ventasChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
                label: 'Ventas',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Configuración de datos para el gráfico de ganancias anuales
    var ctx2 = document.getElementById('gananciasChart').getContext('2d');
    var gananciasChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Ganancias',
                data: [20000, 30000, 40000, 45000],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
