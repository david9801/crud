@extends('layout.app')
@section('title','Download')

@section('content')
    <style>
        .bg-light-green{
            background-color: rgba(29, 236, 14, 0.87);
        }

    </style>
<div class="text-center"><h2>   <i class="fa-sharp fa-solid fa-file-excel"></i>   Descargar fichero csv (EXCEL):</h2></div>

<form action="{{route('product.ProductsExport')}}" method="get" class="text-center">
    @csrf
    <button type="submit" class="bg-light-green btn btn-primary" >  <i class="fa-solid fa-download"></i>    Descargar </button>
</form>

@endsection
