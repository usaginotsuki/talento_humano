@extends('app')
@section('content')   
<div class="jumbotron">
    <h2>Hoja de Control de Salas</h2>
</div>
<div class="container">
<form class="form" id="form" action="{{url('reporte/hojacontrol')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group row">
    <label for="inputFecha" class="col-sm-2 col-form-label">FECHA: </label>
    
    <div class="col-sm-4">
    @if(!empty($controles))
        <input type="text" class="form-control" name="CON_DIA" id="CON_DIA" value="{{$controles[0]->CON_DIA}}" />
       @else
       <input type="text" class="form-control" name="CON_DIA" id="CON_DIA" />
       @endif
    </div>
  </div>
  <div class="form-group row">
    <label for="inputCampus" class="col-sm-2 col-form-label">CAMPUS:</label>
    <div class="col-sm-4">
    <select name="CAM_CODIGO" id="CAM_CODIGO" title="Seleccione un Periodo..." class="form-control">
    <option selected=disabled>Escoja un Campus...</option>
      @foreach ($campus as $camp)
           
           <option value="{{ $camp->CAM_CODIGO  }}">{{ $camp->CAM_NOMBRE }}</option> 
           @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">ACTUALIZAR REPORTE</button>
  </div>

  

</form>
<form class="form" id="form" action="{{url('reporte/pdfcontrol')}}" method="POST">
  <div class="form-group row">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" class="form-control" name="CON_DIA" id="CON_DIA" />
    @if(!empty($controles))
    <input type="hidden" class="form-control" name="CAM_CODIGO" id="CAM_CODIGO" value="{{$controles[0]->CAM_CODIGO}}"  />
    @else
    <input type="hidden" class="form-control" name="CAM_CODIGO" id="CAM_CODIGO"   />
    @endif
    <button type="submit" class="btn btn-danger mb-2">GENERAR REPORTE PDF</button>
  </div>
</form>
<br>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
              <th scope="row">ORD</th>
                <th scope="row">MATERIA</th>
                <th scope="row">SALA</th>
                <th scope="row">ENTRADA</th>
                <th scope="row">SALIDA</th>
                <th scope="row">DOCENTE</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($controles as $con)
        
        <tr>
          <td scope="row">{{$con -> ORD}}</td>
          <td scope="row">{{$con -> MAT_ABREVIATURA}} - {{$con -> MAT_NRC}}</td>
          <td scope="row">{{$con -> LAB_NOMBRE}}</td> 
          <td scope="row">{{$con -> CON_HORA_ENTRADA}}</td>
          <td scope="row">{{$con -> CON_HORA_SALIDA}}</td> 
          <td scope="row">{{$con -> DOC_TITULO}} {{$con -> DOC_APELLIDOS}} {{$con -> DOC_NOMBRES}}</td>
        </tr>    
        
        @endforeach 
        <tbody>
      
        </tbody>
    </table>

</div>
@endsection
