@extends('layouts.principal')

@section('periodo')


<table class="table table-striped table-dark">
  <thead>
   
      <th scope="col">CODIGO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">ESTADO</th>
      <th scope="col">HORAS DE ATENCION</th>
      <th scope="col">FECHA DE INICIO</th>
      <th scope="col">FECHA DE FIN</th>
  
  </thead>
  @foreach ($periodo as $per)
  <tbody>
      <td>{{$per -> PER_CODIGO}}</td>
      <td>{{$per -> PER_NOMBRE}}</td>
      <td>{{$per -> PER_ESTADO}}</td>
      <td>{{$per -> PER_HORAS_ATENCION}}</td>
      <td>{{$per -> PER_FECHA_INICIO}}</td>
      <td>{{$per -> PER_FECHA_FIN}}</td>
        
    </tbody>
    @endforeach
</table>



@stop