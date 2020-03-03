<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Campus'))

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
            <a href="{{url('campus/create')}}" class="btn btn-success mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        
    </div>
    <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($campus as $cam)
            <tr>
                <td scope="row">{{$cam -> CAM_CODIGO}}</td>
            <td scope="row">{{$cam -> CAM_NOMBRE}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{url('campus/'.$cam->CAM_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                    <a href="{{url('campus/'.$cam->CAM_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
                </div>
            </td>
            </tr>
            
            @endforeach  
        </tbody>
         
</table>
</div>
@endsection