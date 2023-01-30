@extends('layout.app')
@section('title','Send')
@section('content')



<h2>Excel Export</h2>
<p>
    Estimado/a {{ auth()->user()->name }},
</p>
<p>
    Adjunto encontrará el archivo Excel con los productos que ha registrado.
</p>
<p>
    Si tiene alguna pregunta o comentario, no dude en ponerse en contacto con nosotros.
</p>
<p>
    Saludos cordiales,
</p>
<p>
    El equipo de soporte.
</p>

@endsection
