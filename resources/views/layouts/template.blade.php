
<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

.stock-indicator {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: inline-block;
      margin-right: 5px;
    }
    .in-stock {
      background-color: green;
    }
    .out-of-stock {
      background-color: red;
    }
</style>

</head>
<body style="padding-bottom: 40px; margin-bottom: 40px;">
   

    @include('partials.navbar')

    @yield('contenido')




    

<footer class="text-light py-1 fixed-bottom" style="background: black">
    <div class="container text-center">
        <p class="mb-0 ">Beastmex &copy; {{date('d/m/Y')}}</p>
    </div>
</footer>



</body>
</html>
