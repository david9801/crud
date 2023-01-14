<!doctype html>
<html lang="en">
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
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    <a class="nav-link" href="{{route('products.prod')}}"><i class="fa-solid fa-download"></i>   Descargar productos</a>
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
