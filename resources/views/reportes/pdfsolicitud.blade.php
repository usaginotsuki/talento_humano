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
}#fondo1{
  background-color:white;
  vertical-align:middle;
  text-align:center;
  font-size: 12px
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
              <th scope="row" id="centrado"width="55%"><h2>SOLICITUD DE USO DE LABORATORIO<h2></th>
              <th scope="row"width="20%">
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
              <td scope="row" id="fondo"width="15%"> DEPARTAMENTO: </td>
              <td scope="row" id="centrado"width="35%"> Eléctrica y Electronica: </td>
              <td scope="row" id="fondo"width="20%"> CARRERA: </td>
              <td scope="row" id="centrado"width="30%"> SOFTWARE</td>
            </tr>
        </thead>
  </table>
  <table>
            <tr>
              <td scope="row" id="fondo"width="15%" > NOMBRE DE LABORATORIO: </td>
              <td scope="row" id="centrado"width="57%"> Redes e Informatica [
              @if(!empty($solicitud)) 
              {{$solicitud->laboratorio->LAB_NOMBRE}}
              @endif
              ]
               </td>
            
              <td scope="row" id="fondo"width="15%"> CODIGO DEL LAB: </td>
              <td scope="row" id="centrado"width="13%">
              </td>
            </tr>
  </table>
  <table >
            <tr>
              <td scope="row" id="fondo"width="15%" > FECHA DE SOLICITUD :</td>
              <td scope="row" id="fondo1"width="25%">@if(!empty($solicitud)) 
              {{$solicitud->SOL_FECHA}}
              @endif</td>
              <td scope="row" id="fondo"width="10%" > FECHA DE USO :</td>
              <td scope="row" id="fondo1" width="22%">@if(!empty($solicitud)) 
              {{$solicitud->SOL_FECHA_USO}}
              @endif
              </td>
              <td scope="row" id="fondo"width="15%" > HORARIO DE USO :</td>
              <td scope="row" id="fondo1" width="13%">@if(!empty($solicitud)) 
              {{$solicitud->SOL_HORARIO_USO}}
              @endif
              </td>
            </tr>

  </table>
  <table >
          <tr>
            <td scope="row" id="fondo"width="15%" > AREA DE OCUPACIÓN:</td>
            <td scope="row" id="fondo"width="35 %"> NOMBRE USUARIO:</td>
            <td scope="row" id="fondo"width="22%" > NRC:</td>
            <td scope="row" id="fondo"width="28%" > TIPO DE USUARIO:</td>
          </tr>
  </table>
  <table >
          <tr>
            <td scope="row" id="fondo"width="5%" > Doc.</td>
            <td scope="row" id="centrado" width="2.5%"> X </td>
            <td scope="row" id="fondo1"width="5%"> Inv.</td>
            <td scope="row" id="fondo1" width="2.5%"></td>
            <td scope="row" id="centrado" width="35%">@if(!empty($solicitud)) 
            {{$solicitud->docente->DOC_TITULO}} {{$solicitud->docente->DOC_NOMBRES}} {{$solicitud->docente->DOC_APELLIDOS}}
              @endif
              </td>
            <td scope="row" id="centrado" width="22%">@if(!empty($solicitud)) 
              {{$solicitud->materia->MAT_NRC}}
              @endif
              </td>
            <td scope="row" id="fondo"width="6%"> Doc.</td>
            <td scope="row" id="centrado" width="3%"> X </td>
            <td scope="row" id="fondo"width="6%"> Inv.</td>
            <td scope="row" id="fondo1" width="3.5%"></td>
            <td scope="row" id="fondo"width="6%"> Est.</td>
            <td scope="row" id="fondo1" width="3.5%"></td>
          </tr>
  </table>
  <table >
          <tr>
            <td scope="row" id="fondo"width="12.5%" > ASIGNATURA:</td>
            <td scope="row" id="centrado" width="37.5%">@if(!empty($solicitud)) 
              {{$solicitud->materia->MAT_NOMBRE}}
              @endif</td>
            <td scope="row" id="fondo"width="11%" > NIVEL:</td>
            <td scope="row" id="centrado" width="11%">@if(!empty($solicitud)) 
              {{$solicitud->materia->MAT_NIVEL}}
              @endif
              </td>
            <td scope="row" id="fondo"width="9%"> PRÁCTICA N°:</td>
            <td scope="row" id="centrado" width="6%">@if(!empty($solicitud)) 
              {{$solicitud->SOL_NUMERO}}
              @endif
              </td>
            <td scope="row" id="fondo"width="9.5%"> N° USUARIOS:</td> 
            <td scope="row" id="centrado" width="3.5%">@if(!empty($solicitud)) 
              {{$solicitud->materia->MAT_NUM_EST}}
              @endif</td>
          </tr>
  </table>
  <table >
          <tr>
            <td scope="row" id="fondo"width="15%" > TEMA DE PRÁCTICA/PROYECTO :</td>
            <td scope="row" id="fondo1" width="85%">@if(!empty($solicitud)) 
              {{$solicitud->SOL_TEMA_PRACTICA}}
              @endif</td>
          </tr>
  </table>
    <table >
          <tr>
            <td scope="row" id="fondo"width="12.5%" > CANTIDAD</td>
            <td scope="row" id="fondo" width="59.5%"> DETALLE DE: EQUIPOS/MATERIALES/INSUMOS/REACTIVOS/ESPECÍMENES VIVOS</td>
            <td scope="row" id="fondo"width="28%"> OBSERVACIONES</td>
          </tr>
  </table>
      <table >
      @if(!empty($solicitud->laboratorio->empresa->materiales))
      @foreach ($solicitud->laboratorio->empresa->materiales as $material)
          <tr>
            <td scope="row" id="fondo1"width="12.5%" >{{$material->MAT_CANTIDAD}}</td>
            <td scope="row" id="fondo1" width="59.5%">{{$material->MAT_DETALLE}}</td>
            <td scope="row" id="fondo1"width="28%">{{$material->MAT_OBSERVACION}}</td>
          </tr>
      @endforeach
      @endif
      @foreach ($solicitud->detalleSolicitud as $detalle)
          <tr>
            <td scope="row" id="fondo1"width="12.5%" >{{$detalle->DETSOL_CANTIDAD}}</td>
            <td scope="row" id="fondo1" width="59.5%">{{$detalle->DETSOL_DETALLE}}</td>
            <td scope="row" id="fondo1"width="28%">{{$detalle->DETSOL_OBSERVACION}}</td>
          </tr>
      @endforeach
  </table>
<br><br><br>
<table>
 <tr>
  <td scope="row" width="33%">
    &nbsp; &nbsp; &nbsp;SOLICITANTE:
    <br>
    <br>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp;............................................................<br>
    &nbsp; &nbsp; &nbsp;<center>@if(!empty($solicitud)) 
    {{$solicitud->docente->DOC_TITULO}} {{$solicitud->docente->DOC_NOMBRES}} {{$solicitud->docente->DOC_APELLIDOS}}
              @endif
            DOCENTE</center>  
    </p>
  </td>
  <td scope="row" width="33%">
    &nbsp; &nbsp; &nbsp;AUTORIZADO POR:
    <br>
    <br>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp;............................................................<br>
    &nbsp; &nbsp; &nbsp; <center>@if(!empty($solicitud)) 
    {{$solicitud->laboratorio->empresa->EMP_FIRMA_JEFE}}
              @endif
            COORDINADOR DEL LABORATORIO</center>
    
    </p>
  </td>
  <td scope="row" width="34%">
    &nbsp; &nbsp; &nbsp;ENTREGADO POR:
    <br>
    <br>
    <br>
    &nbsp; &nbsp; &nbsp; &nbsp;.................................................................<br>
    <br>
    <center>RESPONSABLE DEL LABORATORIO</center>
    </p>
  </td>
 </tr>
</table>
    <li type="disc"><b>Doc.</b>= Docencia/Docente, <b>Inv.</b> = Investigación/Investigador <b>Est.</b> = Estudiante/Tesista/Pasante</li>
</body>
</html>