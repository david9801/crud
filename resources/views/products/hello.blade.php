@extends('layout.app')
@section('title','Página de Inicio')

@section('content')

    <h1>BIENVENIDO A NUESTRO PROGRAMA PARA GUARDAR, ELIMINAR Y EDITAR PRODUCTOS</h1>
    <h2>Puedes guardar ... </h2>


    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.motoideas.com/wp-content/uploads/2019/02/Producto.jpg" class="d-block w-100" alt="..." width="70" height="700">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Producto</h5>
                    <p>Guarda el tipo de producto que tienes.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/55/Mapa_del_mundo_en_1970.jpg" class="d-block w-100" alt="..." width="70" height="700">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Origen</h5>
                    <p>Según el país.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/fotos-premium/simbolo-euro-oro_2227-1458.jpg?w=2000" class="d-block w-100" alt="..." width="70" height="700">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Precio</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>






@endsection
