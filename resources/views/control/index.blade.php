@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Control</h2>
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
            <a href="{{url('control/create')}}" class="btn btn-primary mb-2">Nuevo</a>
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
                <th scope="col">SALA</th>
                <th scope="col">MATERIA</th>
                <th scope="col">DIA</th>
                <th scope="col">HORA ENTRADA</th>
                <th scope="col">HORA SALIDA</th>
                <th scope="col">LABORATORIO ABIERTO</th>
                <th scope="col">HORA ENTRADA REGISTRO</th>
                <th scope="col">REGISTRO FIRMA ENTRADA</th>
                <th scope="col">HORA SALIDA REGISTRO</th>
                <th scope="col">REGISTRO FIRMA SALIDA</th>
                <th scope="col">LABORATORIO CERRADO</th>
                <th scope="col">OBSERVACIONES</th>
                <th scope="col">NUMERO HORAS</th>
                <th scope="col">DOCENTE</th>
                <th scope="col">NOTA</th>
                <th scope="col">EXTRA</th>
                <th scope="col">GUIA</th>
                <th scope="col">CODIGO GUIA</th>
            </tr>
        </thead>
        @foreach ($controles as $control)
        <tbody>
            <td scope="row">{{$control -> CON_CODIGO}}</td>
            <td scope="row">{{$control -> laboratorio->LAB_NOMBRE}}</td>
            <td scope="row">{{$control -> materia->MAT_NOMBRE}}</td>
            <td scope="row">{{$control -> CON_DIA}}</td>
            <td scope="row">{{$control -> CON_HORA_ENTRADA}}</td>
            <td scope="row">{{$control -> CON_HORA_SALIDA}}</td>
            <td scope="row">{{$control -> CON_LAB_ABRE}}</td>
            <td scope="row">{{$control -> CON_HORA_ENTRADA_R}}</td>
            <td scope="row">{{$control -> CON_REG_FIRMA_ENTRADA}}</td>
            <td scope="row">{{$control -> CON_HORA_SALIDA_R}}</td>
            <td scope="row">{{$control -> CON_REG_FIRMA_SALIDA}}</td>
            <td scope="row">{{$control -> CON_LAB_CIERRA}}</td>
            <td scope="row">{{$control -> CON_OBSERVACIONES}}</td>
            <td scope="row">{{$control -> CON_NUMERO_HORAS}}</td>
            <td scope="row">{{$control -> docente->DOC_NOMBRE}}</td>
            <td scope="row">{{$control -> CON_NOTA}}</td>
            <td scope="row">{{$control -> CON_EXTRA}}</td>
            <td scope="row">{{$control -> CON_GUIA}}</td>
            <td scope="row">{{$control -> GUI_CODIGO}}</td>
            <td>
                <form action="{{url('/control/'.$control->CON_CODIGO.'/destroy')}}" method="POST" class="float-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                </form>
                <a href="{{url('control/'.$control->CON_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                &nbsp;
            </td>
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