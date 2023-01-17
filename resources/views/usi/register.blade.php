@extends('layout.app')
@section('title','Registro')

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

        <form class="text-center" action="{{route('do-register')}}" method="POST" >
            @csrf
            <div class="mb-3">
                <label for="exampleUserInput" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="exampleUserInput" name="name">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

@endsection
