<!-- 
    Sistema de Gestion de Laboratorios - ESPE

    Author: Antony Andrade - Jonel Lopez
    Revisado por: Andrade - Jonel Lopez
-->

@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Parámetros'))

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
            <a href="{{url('parametro/create')}}" class="btn btn-success mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TODOS</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">SINO</th>
                <th scope="col">DESTINO</th>
                <th scope="col">DOC CODIGO</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($parametros as $par)
            <tr>
                <td scope="row">{{$par->PAR_CODIGO}}</td>
                <td scope="row">{{$par->PAR_TODOS}}</td>
                <td scope="row">{{$par->empresa->EMP_NOMBRE}}</td>
                <td scope="row">
                    @if ($par->PAR_SINO === '0')
                        <span class="badge badge-danger">NO</span>
                    @elseif ($par->PAR_SINO !== '0')
                        <span class="badge badge-primary">SI</span>
                    @endif
                </td>
                <td scope="row">{{$par -> PAR_DESTINO}}</td>
                <td scope="row">{{$par -> DOC_CODIGO}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('parametro/'.$par->PAR_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                        
                        <a href="{{url('parametro/'.$par->PAR_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
         </tbody>   
    </table>
</div>
@endsection