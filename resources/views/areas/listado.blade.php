@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Areas</h1>
@stop

@section('content')
<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp

            @foreach ($area as $a)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$a->idArea}}</td>
                <td>{{$a->descripcion}}</td>
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