@extends('app')
@section('content')   
<div class="jumbotron">
    <h2>Lista de Control</h2>
</div>
<div class="container">
<form class="form-inline" id="form" action="{{ url('control/fecha') }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group mb-2">
    <label for="inputFecha" class="col-sm-2 col-form-label">FECHA:</label>
    <input type="text" class="form-control" name="CON_DIA" id="CON_DIA" value={{$controles['fecha']}} />
  </div>
  <div class='form-group mx-sm-3 mb-2'>
      <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" >
          <label class="custom-control-label" for="MAT_OCACIONAL">Ocacional</label>
       </div>
  </div>
  <button type="button" class="btn btn-primary mb-2">BUSCAR</button>
</form>
<br>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
              <th scope="row">MATERIA</th>
               <th scope="row">REGISTRO</th>
               
            </tr>
        </thead>
        <tbody>
        @foreach ($controles as $con)
        @if($con !=  $controles["fecha"])
        <tr>
          <td scope="row">{{$con -> MAT_NOMBRE}}</td>
          <td scope="row">{{$con -> REGISTROS}}</td>    
        </tr>
        @endif
        @endforeach   
        </tbody>
    </table>
</div>
@endsection
