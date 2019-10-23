<!DOCTYPE html>
<html>
<head>
<style type="text/css">
table {
   width: 100%;
   
}
th, td {
   text-align: left;
   vertical-align: top;
   border:  solid #000;
   
   font-size: 12px
}

</style>
</head>

<body>

<h3 >REPORTES:</h3><h3 >CONTROL</h3>
         <div class="form-group">
            <h3>MATERIA</h3>
          
        </div>

           <div class="form-group">
            <h3>REGISTROS</h3>

        </div>
 <table>
        <thead>
            <tr>
                <th scope="row">MATERIA</th>
                <th scope="row">REGISTRO</th>
            </tr>
        </thead>
         <tbody >
       @foreach ($controles as $con)
        @if($con !=  $controles["fecha"])
        <tr>
          <td scope="row">{{$con -> MAT_NOMBRE}}</td>
          <td scope="row">{{$con -> REGISTROS}}</td>    
        </tr>
        
        @endif
        @endforeach   
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

</body>
</html>