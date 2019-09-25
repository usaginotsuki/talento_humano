@extends('layouts.principal')

@section('periodo')

<div class="container">
    <h2>Eliminar Periodo</h2>
    <form action="{{url('/periodo/eliminar')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="PER_CODIGO" value="{{ $periodo->PER_CODIGO }}">
        <p>¿Desea eliminar el periodo {{ $periodo->PER_NOMBRE }}?</p>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Eliminar</button>
        <a href="/periodo" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>

@stop