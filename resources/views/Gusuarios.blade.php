@extends('layouts.template')
@section('contenido')
<div class="container col-md-5 mt-4">
    <button onclick="mostrarSeccion('registro')"class="btn btn-primary">Registrar Usuario</button>
    <button onclick="mostrarSeccion('existente')"class="btn btn-primary">Usuarios Existentes</button>
    <div id="seccion-registro" style="display: block;">
        
            <h3 class="display-1 text-center text-primary mt-5 fs-1">Registro de Usuarios</h3>
            @if (session()->has('confirmacion'))
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <strong> {{session('confirmacion') }} </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  @endif
            <div class="card-body">
                <form method="POST" action="/Gusuarios">
                    @csrf
                    <label for="nombre">{{ __('Nombre(s)') }}</label>
                    <input id="nombre" type="text" class="form-control" name="txtnombre" required>

                    <label for="apellido_paterno">{{ __('Apellido paterno') }}</label>
                    <input id="apellido_paterno" type="text" class="form-control" name="txtAP" required>

                    <label for="apellido_materno">{{ __('Apellido materno') }}</label>
                    <input id="apellido_materno" type="text" class="form-control" name="txtAM" required>

                    <label for="correo">{{ __('Correo Electrónico') }}</label>
                    <input id="correo" type="email" class="form-control" name="txtcorreo" required>

                    <label for="puesto">{{ __('Puesto') }}</label>
                    <input id="puesto" type="text" class="form-control" name="txtpuesto" required>

                    <label for="password">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control" name="txtcontraseña" required>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar Usuario') }}
                        </button>
                    </div>
                </form>
            </div>
        
    </div>
    <div id="seccion-existente" style="display: none;">
        <div class="container">
            <h1 class="text-center mb-5">Consulta de Usuarios</h1>
            <!-- Cuadro de búsqueda -->
            <div class="mb-3 col-md-4">
                <input type="text" class="form-control" id="searchInput" placeholder="Buscar por nombre o correo">
            </div>
        
            <!-- Tabla de usuarios -->
@foreach ($Usuarios as $Usuario)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Correo Electrónico</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="userTableBody">
                    <tr>
                        <td>{{ $Usuario->nombre}}</td>
                        <td>{{ $Usuario->AP}}</td>
                        <td>{{ $Usuario->AM}}</td>
                        <td>{{ $Usuario->correo}}</td>
                        <td>{{ $Usuario->puesto}}</td>
                            <a href="#" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash3"></i></a>
                            
                        </td>
                    </tr>
                    
                </tbody>
            </table>
@endforeach
        </div>
    </div>
</div>

<script>
    function mostrarSeccion(seccion) {
        if (seccion === 'registro') {
            document.getElementById('seccion-registro').style.display = 'block';
            // Oculta la sección de usuarios existentes al mostrar la sección de registro
            document.getElementById('seccion-existente').style.display = 'none';
        } else if (seccion === 'existente') {
            // Agrega la lógica para mostrar la sección de usuarios existentes si es necesario
            document.getElementById('seccion-registro').style.display = 'none';
            document.getElementById('seccion-existente').style.display = 'block';
        }
    }
</script>

@endsection
