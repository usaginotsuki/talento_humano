@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
<h2>Docentes</h2>
</div>
<div class="container">
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
                <th scope="col">#</th>
                <th scope="col">CEDULA</th>
                <th scope="col">MI ESPE</th>
                <th scope="col">NOMBRES</th>
                <th scope="col">APELLIDOS</th>
                <th scope="col">CORREO</th>
                <th scope="col">CLAVE</th>
                <th scope="col">TITULO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
       
        <tbody>
        @foreach ($docentes as $doc)
        <tbody>
            <td scope="row">{{$doc -> DOC_CODIGO}}</td>
            <td scope="row">{{$doc -> DOC_CEDULA}}</td>
            <td scope="row">{{$doc -> DOC_MIESPE}}</td>
            <td scope="row">{{$doc -> DOC_NOMBRES}}</td>
            <td scope="row">{{$doc -> DOC_APELLIDOS}}</td>
            <td scope="row">{{$doc -> DOC_CORREO}}</td>
            <td scope="row">{{$doc -> DOC_CLAVE}}</td>
            <td scope="row">{{$doc -> DOC_TITULO}}</td>
            <td>
                <form action="{{url('/docente/'.$doc->DOC_CODIGO.'/destroy')}}" method="POST" class="float-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                </form>
                <a href="{{url('docente/'.$doc->DOC_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                &nbsp;
            </td>
        </tr>
        @endforeach
        </tbody>
        @endforeach   
</table>
<!-- BOTONES DE NAVEGACION -->
<!-- <div class="clearfix">
    <ul class="pagination">
        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
    </ul> -->
</div>
@endsection