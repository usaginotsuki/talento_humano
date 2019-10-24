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

<h3 >REPORTES:</h3><h3 >Eventos Ocacionales Registrados</h3>
  
<div class="form-group">
            <h3>Periodo</h3>
            <h3>{{$periodo->PER_NOMBRE}}</h3>

        </div>
 <table>
        <thead>
            <tr>
                <th class="col">ORD</th>
                <th class="col">FECHA</th>
                <th class="col">SALA</th>
                <th class="col">MATERIA</th>
                <th class="col">DOCENTE</th>
                <th class="col">HORAS</th>
                <th class="col">NOTA</th>
            </tr>
        </thead>
        <tbody>
        </tbody>   
</table>

</body>
</html>