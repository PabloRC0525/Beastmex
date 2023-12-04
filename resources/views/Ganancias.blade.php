@extends('layouts.template')

@section('titulo', 'Informes de Ventas y Ganancias')

@section('contenido')
<div class="container mt-5">
    <h1>Informes de Ventas y Ganancias</h1>

    <div class="row">
        <div class="col-md-6">
            <h2>Ganancias Mensuales</h2>
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
                    <th>Cantidad Vendida</th>
                    <th>Ganancia Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>${{ number_format($gananciasTotales, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
    <p></p>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Configuración de datos para el gráfico de ventas mensuales
    var ctx1 = document.getElementById('ventasChart').getContext('2d');
    var ventasChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: @json($labels), // Reemplaza con tus etiquetas de meses
            datasets: [
                {
                    label: 'Ventas',
                    data: @json($ventasMensuales), // Reemplaza con tus datos de ventas mensuales
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }
            ]
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
            labels: @json($labelsGananciasAnuales), // Reemplaza con tus etiquetas de años
            datasets: [
                {
                    label: 'Ganancias',
                    data: @json($gananciasAnuales), // Reemplaza con tus datos de ganancias anuales
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }
            ]
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
