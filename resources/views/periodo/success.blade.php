@extends('layouts.principal')

@section('periodo')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">{{ $title }}</h1>
        <p class="lead">{{ $subtitle }}</p>
        <a class="btn btn-success mb-2" href="{{url('periodo')}}">Ir a periodos</a>
    </div>
</div>

@stop