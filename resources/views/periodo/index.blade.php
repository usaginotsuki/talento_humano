@extends('app')
@section('content')
@include ('shared.navbar')
<div class="jumbotron">
    <h2>Periodos</h2>
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
            <a href="{{url('periodo/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row">#</th>
                <th scope="row">NOMBRE</th>
                <th scope="row">ESTADO</th>
                <th scope="row">HORAS ATENCION</th>
                <th scope="row">FECHA INICIO</th>
                <th scope="row">FECHA FIN</th>
                <th scope="row">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($periodos as $per)
            <tr>
                <td scope="row">{{$per -> PER_CODIGO}}</td>
                <td scope="row">{{$per -> PER_NOMBRE}}</td>
                <td scope="row">{{$per -> PER_ESTADO}}</td>
                <td scope="row">{{$per -> PER_HORAS_ATENCION}}</td>
                <td scope="row">{{$per -> PER_FECHA_INICIO}}</td>
                <td scope="row">{{$per -> PER_FECHA_FIN}}</td>
                <td>
                    <form action="{{url('/periodo/'.$per->PER_CODIGO.'/destroy')}}" method="POST" class="float-right">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                    </form>
                    <a href="{{url('periodo/'.$per->PER_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                    &nbsp;
                </td>
            </tr>
        @endforeach   
        </tbody>
    </table>
</div>
@endsection
