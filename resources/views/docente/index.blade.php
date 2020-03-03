<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Docentes'))

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
    <div class="row">
        <div class="col">
            <a href="{{url('docente/create')}}" class="btn btn-success mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        
    </div>
    <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
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