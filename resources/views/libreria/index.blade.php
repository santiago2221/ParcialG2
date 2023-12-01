@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <center><h1>Libreria</h1></center>
@stop

@section('content')
<center><div class="card" style="width: 50rem;">
  <img src=" https://images.adsttc.com/media/images/6080/c284/f91c/81a3/2b00/00d0/newsletter/20210407-Maria_Santiba%C3%B1ez_La_Increible-DSC_2506-_copy.jpg?1619051098" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Nuestra colección abarca desde clásicos atemporales hasta 
        las últimas novedades. Seleccionamos cada título con esmero, asegurándonos de ofrecer una variedad
         que satisfaga todos los gustos y edades. Desde la literatura contemporánea hasta la poesía, 
         la ciencia ficción, la historia y la filosofía,
         "tienda de libros" es el lugar donde la diversidad literaria cobra vida.</p>
  </div>
</div>  </center>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop