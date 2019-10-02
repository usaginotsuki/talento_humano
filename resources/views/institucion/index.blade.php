
<!DOCTYPE html>

<html>


 <head>

    <title>Institucion </title>
    
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 </head>
@extends('app')
@section('content')
@include ('shared.navbar')
 <body >

  <div class="jumbotron">
    <h2>Institucion</h2>
  </div>
  <div class="container" >
      
      <a href="institucion/create" class="btn btn-primary mb-2" >Agregar</a> 
      <br><br>
      <table class="table table-striped table-bordered table-responsive"  id="tableInstitucion">
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
        
        
        @foreach ($instituciones as $institucion)
          <tr>
            <td>{{ $institucion->INS_CODIGO }}</td>
            <td>{{ $institucion->INS_NOMBRE }}</td>
            <td>{{ $institucion->INS_FIRMA_DIRECTOR }}</td>
            <td>{{ $institucion->INS_PIE_DIRECTOR }}</td>
            <td>{{ $institucion->INS_PIE_DIRECTOR2 }}</td>
            <td>{{ $institucion->INS_AUX }}</td>
            <td>
                <a href="institucion/edit/{{$institucion->INS_CODIGO}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                <a href="institucion/destroy/{{$institucion->INS_CODIGO}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
            </td>
          </tr>
      
        @endforeach
        <tbody>
        <tfoot>
        <tr>
                <th>Nombre</th> 
                <th>Firma Direccion</th>
                <th>Pie Director</th> 
                <th>Pie Director Dos</th>
                <th>Auxiliar</th>
                </tr>
        </tfoot>
     </table>
    </div >
</body>
@endsection
</html>




