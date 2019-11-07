<!DOCTYPE html>
<html>
<head>
<style type="text/css">
table {
   width: 100%;
   border-collapse:collapse;
   border: 1px solid black;

}
th, td {
   text-align: left;
   vertical-align: top;
   border:  solid #000;
   border: 1px solid black;
   font-size: 12px
   border-collapse:collapse;
}

#internatabla{
  width: 100%;
   border: 0;
   border-collapse:collapse;
}

#centrado{
  vertical-align:middle;
  text-align:center;
}
#fondo{
  background-color:grey;
  vertical-align:middle;
  text-align:center;
  font-size: 8px
}
p{
  font-size:9px;
}

</style>
</head>

<body>
 <table>
        <thead>
            <tr>
              <th scope="row" id="centrado"width="25%">  <img src="<?php echo $_SERVER["DOCUMENT_ROOT"].'/images/reportes/espelogo.png';?>"/>   </th>
              <th scope="row" id="centrado"width="60%"><h3>UNIVERSIDAD DE LAS FUERZAS ARMADAS <h3><br>
                                                      <h4>DEPARTAMENTO DE ELECTRICA Y ELECTRONICA</h4>
                                                      <h6>LABORATORIO DE REDES E INFORMATICA</h6></th>
              <th scope="row"width="15%">
                <p>CÓDIGO: DCM.LB.11 <br>
                VERSIÓN: 1.0 <br>
                FECHA ÚLTIMA REVISIÓN: 08/06/2017     
                </p></th>
            </tr>
        </thead>
 </table>
 <br>
 <table>
        <thead>
            <tr>
              <td scope="row" id="fondo"width="15%"> REPORTE: </td>
              <td scope="row" id="centrado"width="35%"> REPORTE EVENTOS OCACIONALES </td>
              <td scope="row" id="fondo"width="20%"> PERIODO: </td>
              <td scope="row" id="centrado"width="30%"> $data[0]->PER_NOMBRE  </td>
            </tr>
        </thead>
  </table>
  
  <table>
            <tr>
              <td scope="row" id="fondo"width="7.5%" > FECHA </td>
             
              <td scope="row" id="fondo" width="15%">
                SALAS
              </td>
              <td scope="row" id="fondo"width="20%" > DOCENTE </td>
              <td scope="row" id="fondo"width="23%" > MATERIA </td>
              <td scope="row" id="fondo"width="7%" > NUMERO DE HORAS </td>
              <td scope="row" id="fondo" width="9%">
                <table id=internatabla>
                  <tr>
                    <td scope="row" id="fondo"width="100%"> Horario </td>
                  </tr>
                  <table id=internatabla>
                    <tr>
                       <td scope="row" id="fondo" width="50%"> INICIO </td>
                        <td scope="row" id="fondo" width="50%"> FINAL </td>
                    </tr>
                  </table>
                </table>
              </td>
              
              <td scope="row" id="fondo"width="11%" > OBSERVACIONES </td>
              

            </tr>
  </table>
  <table>
         <tbody >
       @foreach ($data as $con)
        <tr>
          <td scope="row" id="centrado"width="7.5%">{{$con -> CON_DIA}}</td>  
          
          
          <td scope="row"id="centrado"width="15%">{{$con->LAB_NOMBRE}}</td>
          
          <td scope="row"id="centrado"width="20%">
               {{$con -> DOC_NOMBRE}}
          </td>
          <td scope="row"id="centrado"width="23%">{{$con->MAT_NOMBRE}}<</td>
          <td scope="row"id="centrado"width="7%">{{$con -> CON_NUMERO_HORAS}}</td> 
          <td scope="row"id="centrado"width="4.5%">{{$con -> CON_HORA_ENTRADA}}</td> 
          <td scope="row"id="centrado"width="4.5%">{{$con -> CON_HORA_SALIDA}}</td> 
          
          <td scope="row"id="centrado"width="11%">
          {{$con -> CON_NOTA}}
          </td>  

        </tr>
        @endforeach   
  
         </tbody>   
</table>
<br><br><br>
<table>
 <tr>
  <td scope="row">
  <p>OBSERVACIONES GENERALES<br><br><br></p>
  </td>
  <td scope="row"id="centrado">
  <p>F.....................................................<br>
  FIRMA....................................................<br>
  &nbsp;RESPONSABLE DEL LABORATORIO
  </p>
  </td>
 </tr>
</table>

</body>
</html>