@extends('layout.app')
@section('title','Create')

@section('content')
    <style>
        .bg-light-blue {
            background-color: #87CEFA;
        }

    </style>

    <form action="{{route('products.store')}}" method="POST">
        @csrf
        <h2> Crear Productos</h2>
        <input type="text" class="bg-light-blue text-center" placeholder="Title" name="title">
        <input type="text" class="bg-light-blue text-center" placeholder="Country" name="country">
        <input type="number" class="bg-light-blue text-center" placeholder="Price" name="price">

        <button type="submit" class="btn btn-primary" > SEND</button>



    </form>


@endsection
