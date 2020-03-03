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
   font-size: 8px;
   font-family:sans-serif; 
   border-collapse:collapse;
}
#margenes{
  margin-top: 0px;
  margin-bottom: 20mm;
  margin-right: 10mm;
  margin-left: 20mm;
  font-family:sans-serif; 
  font-size:11pt;
}
#foot{
  margin-top: 0px;
  font-family:sans-serif; 
  font-size:5pt;
  font-style: oblique;
}
#internatabla{
  width: 100%;
   border: 0px;
   border-collapse:collapse;
}

#centrado{
  vertical-align:middle;
  text-align:center;
}
#fondo{
  background-color:#cacfd2;
  vertical-align:middle;
  text-align:center;
  font-size: 8px
}
#derecha{
 
  vertical-align:middle;
  text-align:right;

}
#izquierda{
 
 vertical-align:middle;
 text-align:left;

}

h1,h2,h3{
  margin-top: 0px;
  margin-bottom: 0px;
}


@page { margin: 20px 30px; }
    #header { position: fixed; left: 58pt; top: -135px; right: 29pt;  background-color:; text-align: center;  font-family:sans-serif; font-size:11pt; }
    #footer { position: fixed; left: 50pt; bottom: -235px; right: 29px; height: 150px; }
    #footer .page:after {  counter-increment: pages; content: counter(page)  }
    

</style>
</head>

<body>
<table></table>
<table>
        <thead>
            <tr>
              <th scope="row" id="centrado"width="25%">  <img src="<?php echo 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].'/sg-lab/public/images/reportes/espelogo.png';?>"/></th>
              <th scope="row" id="centrado"width="55%"><h1>BITÁCORA USO DE LABORATORIO<h1></th>
              <th scope="row"width="20%">
                <p>CÓDIGO: DCM.LB.11 <br>
                VERSIÓN: 1.0 <br>
                FECHA ÚLTIMA REVISIÓN: 08/06/2017     
                </p></th>
            </tr>
        </thead>
 </table>
 <table>
        <thead>
            <tr>
              <td scope="row" id="fondo"width="15%"> <br><h2>DEPARTAMENTO: </h2></td>
              <td scope="row" id="centrado"width="35%"> <br><h2>ELÉCTRICA Y ELECTRÓNICA: </h2></td>
              <td scope="row" id="fondo" width="20%"> <br><h2>CARRERA: </h2></td>
              <td scope="row" id="centrado"width="30%"> </td>
            </tr>
        </thead>
  </table>
  <table>
            <tr>
              <td scope="row" id="fondo"width="15%" > <h3>NOMBRE DE LABORATORIO: </h3></td>
              
              <td scope="row" id="centrado"width="65%"><h3>
                  @if(!empty($controles)) 
                  {{$controles[0]->EMP_NOMBRE}}
                  @endif
              <h3>
              </td>
              <td scope="row" id="fondo"width="7%"> <h3>CODIGO DEL LAB: </h3></td>
              <td scope="row" id="centrado"width="13%">
            </tr>
  </table>
  <table >
            <tr>
              <th scope="row" id="fondo"width="7.5%" > FECHA </th>
              <th scope="row" id="fondo"width="7.5%">
                <table id=internatabla border="0">
                  <tr>
                    <td  scope="row" id="fondo"width="100%" style="border-bottom: solid black;"> AREA </td>
                  </tr>
                  <table id=internatabla border="0">
                    <tr>
                      <td scope="row" id="fondo" width="50%" > Doc </td>
                      <td scope="row" id="fondo" width="50%"> Inv </td>
                    </tr>
                  </table>
                </table>
              </th>
              <th scope="row" id="fondo" width="12%">
                <table id=internatabla border="0">
                  <tr>
                    <td scope="row" id="fondo"width="100%"> N° de USUARIOS </td>
                  </tr>
                  <table id=internatabla border="0">
                    <tr>
                       <td scope="row" id="fondo" width="25%"> Doc </td>
                        <td scope="row" id="fondo" width="50%"> Anal.Lab. </td>
                        <td scope="row" id="fondo" width="25%"> Est. </td>
                    </tr>
                  </table>
                </table>
              </th>
              <th scope="row" id="fondo"width="26%" > NOMBRE </th>
              <th scope="row" id="fondo"width="17%" > TEMA/ENSAYO </th>
              <th scope="row" id="fondo" width="12%">
                <table id=internatabla border="0">
                  <tr>
                    <td scope="row" id="fondo"width="100%" style="border-bottom: solid black;"> HORARIO </td>
                  </tr>
                  <table id=internatabla border="0">
                    <tr>
                       <td scope="row" id="fondo" width="50%"> INICIO </td>
                        <td scope="row" id="fondo" width="50%"> FINAL </td>
                    </tr>
                  </table>
                </table>
              </th>
              <th scope="row" id="fondo"width="7%" > FIRMA </th>
              <th scope="row" id="fondo"width="11%" > OBSERVACIONES </th>
              

            </tr>
  </table>
  <table>
         <tbody >
       @foreach ($controles as $con)
        <tr>
          <td scope="row" id="centrado" width="7.5%">{{$con -> CON_DIA}}</td>  
          <td scope="row" id="centrado" width="3.75%">X</td>
          <td scope="row" id="centrado" width="3.75%"></td>
          <td scope="row" id="centrado" width="3%">1</td>
          <td scope="row" id="centrado" width="6%">1</td>
          <td scope="row" id="centrado" width="3%">{{$con -> MAT_NUM_EST}}</td>
          <td scope="row" id="centrado" width="26%">
            <h3>{{$con -> MAT_ABREVIATURA}}</h3>
              {{$con-> DOC_TITULO}} {{$con -> DOC_APELLIDOS}} {{$con -> DOC_NOMBRES}}
          </td>
          <td scope="row" id="centrado" width="17%"></td> 
          <td scope="row" id="centrado" width="6%">{{$con -> CON_HORA_ENTRADA}}</td> 
          <td scope="row" id="centrado" width="6%">{{$con -> CON_HORA_SALIDA}}</td> 
          <td scope="row" id="centrado" width="7%"></td>
          <td scope="row" id="centrado" width="11%">
              {{$con-> LAB_NOMBRE}}
              @if($con->CON_EXTRA==1)
              <br>OCASIONAL
              @endif
          </td>  
       </tr>
        @endforeach   

        <!-- Lineas Adicionales !-->
        @for($i=1;$i<=10;$i++)
        <tr>
          <td scope="row" id="centrado" width="7.5%">{{$con -> CON_DIA}}</td>  
          <td scope="row" id="centrado" width="3.75%">X</td>
          <td scope="row" id="centrado" width="3.75%"></td>
          <td scope="row" id="centrado" width="3%">1</td>
          <td scope="row" id="centrado" width="6%">1</td>
          <td scope="row" id="centrado" width="3%"></td>
          <td scope="row" id="centrado" width="26%"><br><br></td>
          <td scope="row" id="centrado" width="17%"></td> 
          <td scope="row" id="centrado" width="6%"></td> 
          <td scope="row" id="centrado" width="6%"></td> 
          <td scope="row" id="centrado" width="7%"></td>
          <td scope="row" id="centrado" width="11%"></td>  
        </tr>
        @endfor   
  
         </tbody>   
</table>
<h6><b>*Doc.</b> = Docencia/Docente, <b>Inv.</b> = Investigacion/Investigador, <b>Anal.Lab.</b> = Analista de Laboratorio, <b>Est.</b> = Estudiante/Tesista/Pasante </h6>

<br>
<table>
 <tr>
  <td scope="row" width="50%">
  <p><b>OBSERVACIONES GENERALES:</b><br><br><br></p>
  </td>
  <td scope="row"id="centrado" width="50%">
  <br>
  <br>
  F:..................................................................................................<br><br>
  NOMBRE:....................................................................................<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>RESPONSABLE DEL LABORATORIO</b>
  </td>
 </tr>
</table>

</body>
</html>