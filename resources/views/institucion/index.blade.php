<!--
 Sistema de Gestion de Laboratorios - ESPE
 
 Author: Daniel Lopez - Jipson Murillo
 Revisado por: Daniel Lopez - Jipson Murillo
 -->

@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Institución'))

<div class="container-fluid" >
  <a href="{{url('institucion/create')}}" class="btn btn-success mb-2">Nuevo</a> 
  <br><br>
  <table class="table table-striped table-bordered table-responsive"  id="ListTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th> 
        <th>Firma Dirección</th>
        <th>Pie Director</th> 
        <th>Pie Director Dos</th>
        <th>Auxiliar</th>
        <th>OPCIONES</th>
      </tr>       
    </thead>
    <tbody>
    
    @foreach ($instituciones as $institucion)
      <tr>
        <td>{{ $institucion->INS_CODIGO }}</td>
        <td>{{ $institucion->INS_NOMBRE }}</td>
        <td>{{ $institucion->INS_FIRMA_DIRECTOR }}</td>
        <td>{{ $institucion->INS_PIE_DIRECTOR }}</td>
        <td>{{ $institucion->INS_PIE_DIRECTOR2 }}</td>
        <td>{{ $institucion->INS_AUX }}</td>
        <td>
            <a href="{{url('institucion/'.$institucion->INS_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
            <a href="{{url('institucion/'.$institucion->INS_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
        </td>
      </tr>
    @endforeach
    <tbody>
  </table>
</div >
@endsection
