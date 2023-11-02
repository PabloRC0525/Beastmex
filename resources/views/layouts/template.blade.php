
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="sweetalert2.all.min.js"></script> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
    /* Estilos para la barra de navegación */
.navbar {
    background: linear-gradient(to right, #4CAF50, #2196F3, #FF5722);
    height: 80px;
    font-family: 'Poppins', sans-serif; /* Utiliza la fuente Poppins y luego las fuentes genéricas sans-serif como alternativa */
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1); /* Agrega una sombra sutil a la barra */
}

.navbar-collapse {
    justify-content: center; /* Alinea los elementos al centro horizontalmente */
}


/* Estilos para el enlace en la barra de navegación */
.navbar-nav .nav-link {
    font-size: 16px;
    color: white;
    transition: 0.3s; /* Agrega una transición suave al color del texto */
}

/* Cambiar color del texto al pasar el ratón por encima */
.navbar-nav .nav-link:hover {
    color: #ffc107; /* Cambia el color del texto al pasar el ratón por encima */
    
}

</style>

</head>
<body>
   

    @include('partials.navbar')

    @yield('contenido')




    

<footer class="text-light py-1 fixed-bottom" style="background: black">
    <div class="container text-center">
        <p class="mb-0 ">Beastmex &copy; {{date('d/m/Y')}}</p>
    </div>
</footer>



</body>
</html>