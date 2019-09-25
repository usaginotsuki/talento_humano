@extends('layouts.principal')

@section('periodo')

<div class="container">
<<<<<<< HEAD
    <h2>Elimina</h2>
    <form action="{{url('periodo/eliminar/'.$per->PER_CODIGO)}}" method="DELETE">
=======
    <h2>Eliminar Periodo</h2>
    <form action="{{url('/periodo/eliminar')}}" method="POST">
>>>>>>> 391c83f297fa6f9b73cb5177f68affdb9bbc88e5
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="PER_CODIGO" value="{{ $periodo->PER_CODIGO }}">
        <p>¿Desea eliminar el periodo {{ $periodo->PER_NOMBRE }}?</p>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Eliminar</button>
        <a href="/periodo" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>

@stop