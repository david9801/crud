@extends('layout.app')
@section('title','Create')

@section('content')
    <style>
        .bg-light-blue {
            background-color: #87CEFA;
            border: 3px solid blue;
            width: 300px;
            height: 40px;
        }

    </style>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('products.store')}}" method="POST" class="text-center">
        @csrf
        <h2> Crear Productos</h2>
        <input type="text" class="bg-light-blue text-center" placeholder="Title" name="title">
        <input type="text" class="bg-light-blue text-center" placeholder="Country" name="country">
        <input type="number" class="bg-light-blue text-center" placeholder="Price" name="price">
        <!--"
        <select type="select"  name="user_id" class="bg-light-blue text-center">
            @foreach(\App\Models\User::all() as $user)
                <option value = "{{$user->id}}"  >     {{$user->name}}    </option>
            @endforeach
        </select>
        "-->

        <button type="submit" class="btn btn-primary" > SEND</button>
    </form>
@endsection
