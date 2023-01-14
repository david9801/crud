@extends('layout.app')
@section('title','Edit')

@section('content')
    <style>
        .bg-light-blue {
            background-color: #87CEFA;
        }

    </style>

    <form action="{{route('products.store',$product->id)}}" method="POST" class="text-center">
        @csrf
        <h2> Editar Producto {{$product->id}}</h2>
        <input type="text" class="bg-light-blue text-center" placeholder="Title" name="title" value="{{$product->title}} ">
        <input type="text" class="bg-light-blue text-center" placeholder="Country" name="country" value="{{$product->country}}">
        <input type="number" class="bg-light-blue text-center" placeholder="Price" name="price" value="{{$product->price}}">

        <button type="submit" class="btn btn-primary" > SEND</button>
    </form>


@endsection
