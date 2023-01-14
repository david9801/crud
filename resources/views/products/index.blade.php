@extends('layout.app')
@section('title', 'Inicio')
@section('content')
    <style>
        .bg-light-red{
            background-color: rgba(254, 0, 0, 0.92);
        }
        .bg-light-green{
            background-color: rgb(17, 254, 0);
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
                    <button type="submit" class="bg-light-red px-3 py-1 rounded-sm"><i class="fa-solid fa-trash"></i> </button>
                </form>
                <a href="{{route('products.edit', $row->id)}}" class="bg-light-green px-3 py-1 rounded-sm"> <i class="fa-solid fa-pen-to-square"></i></a>

            </td>


        </tr>
        @endforeach

        </tbody>
    </table>

@endsection()
