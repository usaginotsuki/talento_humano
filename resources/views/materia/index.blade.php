<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Materias'))

<div class="container-fluid">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="{{url('materia/create')}}" class="btn btn-success mb-2">Nuevo</a>
        </div>       
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <table id="ListTable" class="table table-hover table-bordered results">
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
                <td scope="row">{{$periodo->PER_NOMBRE}}</td>
                <td scope="row">{{$mat->docente->DOC_APELLIDOS.' '.$mat->docente->DOC_NOMBRES}}</td>
                <td scope="row">{{$mat->carrera->CAR_NOMBRE}}</td>  
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