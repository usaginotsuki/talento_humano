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

<h3 >REPORTES:</h3><h3 >Materias por Carrera</h3>
         <div class="form-group">
            <h3>Periodo</h3>
            <h3>{{$periodo->PER_NOMBRE}}</h3>
        </div>

           <div class="form-group">
            <h3>Carrera</h3>

            <h3>{{$carrera->CAR_NOMBRE}} </h3>
        </div>
 <table>
        <thead>
            <tr>
                <th scope="col">ORD</th>
                <th scope="col">MATERIA</th>
                <th scope="col">NRC</th>
                <th scope="col">DOCENTE</th>
                <th scope="col">CREDITOS</th>
                <th scope="col">ESTUDIANTES</th>
                <th scope="col">ABREVIATURA</th>
            </tr>
        </thead>
         <tbody >
        @foreach ($materias as $mat)
        <tr>       
            <td scope="row">{{$mat ->MAT_CODIGO}}</td>
            <td scope="row">{{$mat ->MAT_NOMBRE}}</td>
            <td scope="row">{{$mat ->MAT_NRC}}</td>
            <td scope="row">{{$mat->DOC_CODIGO}}</td>
            <td scope="row">{{$mat ->MAT_CREDITOS}}</td>
            <td scope="row">{{$mat ->MAT_NUM_EST}}</td>
            <td scope="row">{{$mat ->MAT_ABREVIATURA}}</td>           
          
        @endforeach
         </tbody>   
</table>

</body>
</html>