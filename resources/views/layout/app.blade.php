<!doctype html>
<html lang="en">

<style>
    .dark-mode{
        background-color: #2d3748;
        transition:background-color .3s;
    }
    .dark-mode .card{
        background-color: #4a5568;
    }
</style>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- FontAwesome personal-->
    <script src="https://kit.fontawesome.com/06c6f7ab73.js" crossorigin="anonymous"></script>
    <!-- Titulo-->
    <title>@yield('title') - Productos </title>
</head>


<style>
    /* Estilos para el modo claro */
    .bg-light {
        background-color: #ffffff;
        color: #000000;
    }

    /* Estilos para el modo oscuro */
    .bg-dark {
        background-color: #333333;
        color: #ffffff;
    }
    .bg-dark table{
        color: #ffffff;
    }

</style>

<body class="bg-light">
<button class="btn btn-light" id="lightModeBtn"><i class="fa-sharp fa-solid fa-sun"></i> Modo claro</button>
<button class="btn btn-dark" id="darkModeBtn"><i class="fa-sharp fa-solid fa-moon"></i> Modo oscuro</button>


<script>
    var lightModeBtn = document.getElementById("lightModeBtn");
    var darkModeBtn = document.getElementById("darkModeBtn");
    lightModeBtn.addEventListener("click", function() {
        document.body.classList.remove("bg-dark");
        document.body.classList.add("bg-light");
    });
    darkModeBtn.addEventListener("click", function() {
        document.body.classList.remove("bg-light");
        document.body.classList.add("bg-dark");
    });
</script>

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">


        <a class="navbar-brand" href="{{route('products.hello')}}">  <i class="fa-sharp fa-solid fa-house"></i>  Barra de Tareas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">




            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('products.create')}}"><i class="fas fa-cart-plus"></i>   Crear Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}"><i class="fa-sharp fa-solid fa-cart-shopping"></i>   Ver Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.export')}}"><i class="fa-solid fa-download"></i>   Descargar productos</a>
                </li>

            </ul>
        </div>
    </div>
</nav>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@yield('content')

</body>
</html>
