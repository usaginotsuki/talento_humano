@extends('app')
@section('content')

<div class="jumbotron">
<h2>Docentes</h2>
</div>
<div class="container">
    <h2>Docentes</h2>
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="{{url('docente/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <span class="oi oi-magnifying-glass"></span>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th>#</th>
                <th>CEDULA</th>
                <th>USUARIO MIESPE</th>
                <th>DOCENTE</th>
                <th>CORREO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
       
        <tbody>
        @foreach ($docentes as $doc)
        <tr>
            <td>{{$doc->DOC_CODIGO }}</td>
            <td>{{$doc->DOC_CEDULA}}</td>
            <td>{{$doc->DOC_MIESPE}}</td>
            <td>{{$doc->DOC_TITULO}} {{$doc->DOC_NOMBRES}} {{$doc->DOC_APELLIDOS}}</td>
            <td>{{$doc->DOC_CORREO}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{url('docente/'.$doc->DOC_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                    <a href="{{url('docente/'.$doc->DOC_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection