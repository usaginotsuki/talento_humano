
<!DOCTYPE html>

<html>


 <head>

    <title>Empresa </title>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 </head>
@extends('app')
@section('content')
@include ('shared.navbar')
 <body >

  <div class="container" style="margin-right: 350px;">
      <h1>EMPRESA </h1>
      
      <a href="empresa/create" class="btn btn-primary mb-2" >Agregar</a> 
      <br><br>
      <table  id="ListTable" class="table table-striped table-bordered table-responsive"  >
        <thead>
          <tr>
            <th>ID</th>
            <th>Laboratorio General</th> 
            <th>Director Departamento</th>
            <th>Cargo Director Departamento</th> 
            <th>Jefe Laboratorio</th>
            <th>Cargo Jefe Laboratorio</th>
            <th>Laboratorista</th> 
            <th>Cargo Laboratorista</th>
            <th>Estado Laboratorio</th> 
            
            <th>OPCIONES</th>
          </tr>       
        </thead>
        <tbody>
        
        
        @foreach ($empresas as $empresa)
          <tr>
            <td>{{ $empresa->EMP_CODIGO }}</td>
            <td>{{ $empresa->EMP_NOMBRE }}</td>
            <td>{{ $empresa->EMP_FIRMA_DEE }}</td>
            <td>{{ $empresa->EMP_PIE_DEE }}</td>
            <td>{{ $empresa->EMP_FIRMA_JEFE }}</td>
            <td>{{ $empresa->EMP_PIE_JEFE }}</td>
            <td>{{ $empresa->EMP_FIRMA_LAB }}</td>
            <td>{{ $empresa->EMP_PIE_LAB }}</td>
            
            @if ($empresa->EMP_ESTADO !== 1)
            <td>{{"False"}}</td> 
            @elseif ($empresa->EMP_ESTADO === 1)
            <td>{{"True"}}</td>     
            @endif
           
            
            <td>
                <a href="empresa/edit/{{$empresa->EMP_CODIGO}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                <a href="empresa/destroy/{{$empresa->EMP_CODIGO}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
            </td>
          </tr>
      
        @endforeach
        <tbody>
        <tfoot>
        <tr>
                <th>ID</th>
                <th>Laboratorio</th>
                <th>Director Dep</th>
                <th>Cargo Director Dep</th>
                <th>Jefe Lab</th>
                <th>Cargo Jefe Lab</th>
                <th>Laboratorista</th>
                <th>Cargo Laboratorista</th>
                <th>Estado Laboratorio</th>
        
            </tr>
        </tfoot>
     </table>
    </div >
</body>
@endsection
</html>




