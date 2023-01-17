@extends('layout.app')
@section('title','Login')

@section('content')


    <style>
        form {
            overflow: hidden;
            position: relative;
            width: 40%;
            height: 800px;
            margin: 0 auto;
        }
    </style>


    <form class="text-center"  action="{{route('do-login')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else!.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        @error('message')
        <p>  Error en el inicio de sesion </p>
        @enderror
    </form>
@endsection
