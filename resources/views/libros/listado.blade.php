@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Libros</h1>
@stop

@section('content')
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ISBN</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Genero Literario</th>
                <th scope="col">Precio Unitario</th>
                <th scope="col">Observacion</th>
                <th scope="col">Foto</th>
                <th scope="col">Area</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            @foreach ($book as $b)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$b->ISBN}}</td>
                <td>{{$b->nombre}}</td>
                <td>{{$b->descripcion}}</td>
                <td>{{$b->generoLiterario}}</td>
                <td>{{$b->precioUnitario}}</td>
                <td>{{$b->observacion}}</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/3145/3145866.png" alt="Descripción de la imagen" class="img-fluid rounded" width="50" height="50"></td>
                <td>{{$b->descripcion}}</td>
               
                @php
                    $i = $i+1;
                @endphp
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop