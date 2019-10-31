@extends('app')
@section('content')
<div class="container">
    <h2>Materias</h2>
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
            <a href="{{url('materia/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>       
        <div class="col"></div>
        <div class="col"></div>

          <div class="form-group">
 <input id="buscar" type="text" class="form-control" placeholder="Buscar" onkeyup="myFunction()"/>
</div>


    </div>
    <table id="ListTable1" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row">Periodo</th>
                <th scope="row">Docente</th>
                <th scope="row">Carrera</th>
                <th scope="row">NRC</th>
                <th scope="row">Nombre</th>
                <th scope="row">Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($materias as $mat)
            <tr>       
                <td scope="row">{{$mat-> PER_CODIGO}}</td>
                <td scope="row">{{$mat-> DOC_CODIGO}}</td>
                <td scope="row">{{$mat-> CAR_CODIGO}}</td>  
                <td scope="row">{{$mat-> MAT_NRC}}</td>
                <td scope="row">{{$mat-> MAT_NOMBRE}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('materia/'.$mat->MAT_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                        <a href="{{url('materia/'.$mat->MAT_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>   
    </table>
</div>
@endsection