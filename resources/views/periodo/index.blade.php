@extends('layouts.principal')

@section('periodo')

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
    <h2>Periodos</h2>
    <a href="{{url('periodo/create')}}" class="btn btn-primary mb-2">Nuevo</a>
    <table id="periodoTabla" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>NOMBRE</th>
                <th>ESTADO</th>
                <th>HORAS ATENCION</th>
                <th>FECHA INICIO</th>
                <th>FECHA FIN</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach ($periodos as $per)
        <tbody>
            <td>{{$per -> PER_CODIGO}}</td>
            <td>{{$per -> PER_NOMBRE}}</td>
            <td>{{$per -> PER_ESTADO}}</td>
            <td>{{$per -> PER_HORAS_ATENCION}}</td>
            <td>{{$per -> PER_FECHA_INICIO}}</td>
            <td>{{$per -> PER_FECHA_FIN}}</td>
            <td>
                <form action="{{url('/periodo/'.$per->PER_CODIGO.'/destroy')}}" method="POST" class="float-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                </form>
                <a href="{{url('periodo/'.$per->PER_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                &nbsp;
            </td>
        </tbody>
        @endforeach
    </table>
</div>

@stop