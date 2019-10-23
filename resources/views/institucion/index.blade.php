@extends('app')
@section('content')
@include ('shared.navbar')
<div class="container" >
  <h2>Instituciones</h2>
  <a href="{{url('institucion/create')}}" class="btn btn-primary mb-2">Nuevo</a> 
  <br><br>
  <table class="table table-striped table-bordered table-responsive" id="ListTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th> 
        <th>Firma Direccion</th>
        <th>Pie Director</th> 
        <th>Pie Director Dos</th>
        <th>Auxiliar</th>
        <th>OPCIONES</th>
      </tr>       
    </thead>
    <tbody>
      @foreach ($instituciones as $ins)
      <tr>
        <td>{{ $ins->INS_CODIGO }}</td>
        <td>{{ $ins->INS_NOMBRE }}</td>
        <td>{{ $ins->INS_FIRMA_DIRECTOR }}</td>
        <td>{{ $ins->INS_PIE_DIRECTOR }}</td>
        <td>{{ $ins->INS_PIE_DIRECTOR2 }}</td>
        <td>{{ $ins->INS_AUX }}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{url('institucion/'.$ins->INS_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
              <a href="{{url('institucion/'.$ins->INS_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
            </div>
        </td>
      </tr>
      @endforeach
    <tbody>
  </table>
</div>
@endsection