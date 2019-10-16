
<!DOCTYPE html>

<html>


 <head>

    <title>Control </title>
    
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 </head>
@extends('app')
@section('content')
@include ('shared.navbar')
 <body >

  <div class="jumbotron">
    <h2>Control</h2>
  </div>
  <div class="container" >
      
      <a href="control/create" class="btn btn-primary mb-2" >Agregar</a> 
      <br><br>
      <table class="table table-striped table-bordered table-responsive"  id="ListTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Dia</th> 
            <th>Hora Entrada</th>
            <th>Hora Salida</th> 
            <th>Laboratorio Abierto</th>
            <th>Hora Entrada Registro</th>
            <th>Registro Firma Entrada</th>
            <th>Hora Salida Registro</th>
            <th>Registro Firma Salida</th>
            <th>Laboratorio Cierra</th>
            <th>Observaciones</th>
            <th>Numero Horas</th>
            <th>Nota</th>
            <th>Extra</th>
            <th>Guia</th>
            <th>Codigo Guia</th>
            <th>Laboratorio</th>
            <th>Materia</th>
            <th>Docente</th>
            <th>OPCIONES</th>
          </tr>       
        </thead>
        <tbody>
        
        
        @foreach ($controles as $control)
          <tr>
            <td>{{ $control->CON_CODIGO }}</td>
            <td>{{ $control->CON_DIA }}</td>
            <td>{{ $control->CON_HORA_ENTRADA }}</td>
            <td>{{ $control->CON_HORA_SALIDA }}</td>
            <td>{{ $control->CON_LAB_ABRE }}</td>
            <td>{{ $control->CON_HORA_ENTRADA_R }}</td>
            <td>{{ $control->CON_REG_FIRMA_ENTRADA }}</td>
            <td>{{ $control->CON_HORA_SALIDA_R }}</td>
            <td>{{ $control->CON_REG_FIRMA_SALIDA }}</td>
            <td>{{ $control->CON_LAB_CIERRA }}</td>
            <td>{{ $control->CON_OBSERVACIONES }}</td>
            <td>{{ $control->CON_NUMERO_HORAS}}</td>
            <td>{{ $control->CON_NOTA }}</td>
            <td>{{ $control->CON_EXTRA }}</td>
            <td>{{ $control->CON_GUIA }}</td>
            <td>{{ $control->GUI_CODIGO }}</td>
            <td>{{ $control->LAB_CODIGO }}</td>
            <td>{{ $control->MAT_CODIGO }}</td>
            <td>{{ $control->DOC_CODIGO }}</td>
            <td>
                <a href="control/edit/{{$control->CON_CODIGO}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                <a href="control/destroy/{{$control->CON_CODIGO}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
            </td>
          </tr>
      
        @endforeach
        <tbody>
        <tfoot>
        <tr>
          <th>ID</th>
          <th>Dia</th> 
          <th>Hora Entrada</th>
          <th>Hora Salida</th> 
          <th>Laboratorio Abierto</th>
          <th>Hora Entrada Registro</th>
          <th>Registro Firma Entrada</th>
          <th>Hora Salida Registro</th>
          <th>Laboratorio Cierra</th>
          <th>Observaciones</th>
          <th>Numero Horas</th>
          <th>Nota</th>
          <th>Extra</th>
          <th>Guia</th>
          <th>Codigo Guia</th>
          <th>Laboratorio</th>
          <th>Materia</th>
          <th>Docente</th>
        </tr>
        </tfoot>
     </table>
    </div >
</body>
@endsection
</html>




