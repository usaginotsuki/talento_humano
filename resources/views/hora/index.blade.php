<!-- 
    Sistema de Gestion de Laboratorios - ESPE

    Author: Antony Andrade - Jonel Lopez
    Revisado por: Andrade - Jonel Lopez
-->

@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Hora'))

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
            <a href="{{url('hora/create')}}" class="btn btn-success mb-2">Nuevo</a>
        </div>
    </div>
    <table class="table table-hover table-bordered results" id="ListTable">
        <thead>
            <tr>
                <th scope="col">CODIGO</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">HORA</th>
                <th scope="col">ACCIONES</th>
            </tr>     
        </thead>
        <tbody>
        

        @foreach ($horas as $hora)
            <tr>
                <td scope="row">{{$hora -> HORA_CODIGO}}</td>
                <td scope="row">{{$hora -> empresa->EMP_NOMBRE}}</td>
                <td scope="row">{{$hora -> HORA_NOMBRE}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{url('hora/'.$hora->HORA_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                        
                        <form action="{{url('/hora/'.$hora->HORA_CODIGO.'/destroy')}}" method="POST" class="float-right">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        <tbody>
     </table>
    </div >
</div>
@endsection