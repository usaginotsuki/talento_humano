@extends('layouts.principal')

@section('periodo')
<!-- TABLA -->
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Buscar">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ESTADO</th>
                <th scope="col">HORAS ATENCION</th>
                <th scope="col">FECHA INICIO</th>
                <th scope="col">FECHA FIN</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        @foreach ($periodos as $per)
        <tbody>
            <td scope="row">{{$per -> PER_CODIGO}}</td>
            <td scope="row">{{$per -> PER_NOMBRE}}</td>
            <td scope="row">{{$per -> PER_ESTADO}}</td>
            <td scope="row">{{$per -> PER_HORAS_ATENCION}}</td>
            <td scope="row">{{$per -> PER_FECHA_INICIO}}</td>
            <td scope="row">{{$per -> PER_FECHA_FIN}}</td>
            <td>
                <a href="{{url('periodo/'.$per->PER_CODIGO.'/editar')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                <a href="{{url('periodo/'.$per->PER_CODIGO.'/eliminar')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
            </td>
        </tbody>
        @endforeach   
</table>
<!-- BOTONES DE NAVEGACION -->
<div class="clearfix">
    <ul class="pagination">
        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</div>

@stop