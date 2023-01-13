@extends('layout.app')
@section('title', 'Inicio')
@section('content')
    <style>
        .bg-light-red{
            background-color: rgba(254, 0, 0, 0.92);
        }
    </style>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Country</th>
            <th scope="col">Price</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $row)
        <tr>
            <td scope="row">  {{ $row->id  }}  </td>
            <td>  {{ $row->title  }}  </td>
            <td>  {{ $row->country  }} </td>
            <td>  {{ $row->price  }}  </td>
            <td>  {{ $row->created_at  }}  </td>
            <td>  {{ $row->updated_at  }}  </td>
            <td>
                <form action="{{route('products.destroy',$row->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="bg-light-red">Eliminar </button>
                </form>
            </td>


        </tr>
        @endforeach

        </tbody>
    </table>

@endsection()
