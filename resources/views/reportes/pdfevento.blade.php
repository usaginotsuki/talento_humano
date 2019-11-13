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
<header &copy;>
<div  >
<img  style='height: 100%; width: 100%;' src="http://webltga.espe.edu.ec/sg-lab/images/encabezado.png"  >
<div>
 <br>
 <table border="0px">
        <thead style="border:0 ">
            <tr>
              <td scope="row"  width="20%"> <b>REPORTE</td>
              <td scope="row" id="centrado"width="30%">: REPORTE EVENTOS OCACIONALES </td>
              <td scope="row"  width="20%"> <b> </td>
              <td scope="row" id="centrado"width="30%">:  </td>
            </tr>
        </thead>
  </table>
  <table border="0px">
        <thead>
            <tr>
              <td scope="row"  width="20%"> <b>PERIODO</b> </td>
              <td scope="row" width="30%">: {{$data[0]->PER_NOMBRE}}  </td>
              <td scope="row" width="20%"> <b> FECHAS</b> </td>
              <td scope="row" width="30%">: DE {{$fechaInicial}} AL{{$fechaFinal}}  </td>
            </tr>
        </thead>
  </table>
  <br>
  </header>
  <table align="center">
            <tr>
              <td style="text-align: center; vertical-align: middle;" scope="row" width="3.9%" >  <b>ORD</b> </td>
              <td style="text-align: center; vertical-align: middle;" scope="row" width="10%" ><b>FECHA</b> </td>
              <td style="text-align: center; vertical-align: middle;" scope="row"  width="15%"> <b>SALAS</b></td>
              <td style="text-align: center; vertical-align: middle;" scope="row" width="23%" > <b>MATERIA</b> </td>
              <td style="text-align: center; vertical-align: middle;" scope="row" width="20%" > <b>DOCENTE</b> </td>
              <td style="text-align: center; vertical-align: middle;" scope="row" width="11%" > <b>HORAS</b> </td>             
              <td style="text-align: center; vertical-align: middle;" scope="row" width="11%" > <b>NOTA</b> </td>
              

            </tr>
  </table>
  
  <table>
         <tbody >
        
       @for ($i = 0; $i < count($data); $i++)
       
        <tr>
          <td style="text-align: left; vertical-align: middle;" scope="row" id="centrado"width="3.9%">{{$i}}</td>
          <td style="text-align: left; vertical-align: middle;" scope="row" id="centrado"width="10%">{{$data[$i] -> CON_DIA}}</td> 
          <td style="text-align: left; vertical-align: middle;" scope="row"id="centrado"width="15%">{{$data[$i]->LAB_NOMBRE}}</td>
          <td style="text-align: left; vertical-align: middle;" scope="row"id="centrado"width="23%"> {{$data[$i] -> MAT_NOMBRE}}</td>
          <td style="text-align: left; vertical-align: middle;" scope="row"id="centrado"width="20%"> {{$data[$i] -> DOC_NOMBRE}}</td>
          <td style="text-align: center; vertical-align: middle;" scope="row"id="centrado"width="11%">{{$data[$i] -> CON_NUMERO_HORAS}}</td>  
          <td style="text-align: left; vertical-align: middle;" scope="row"id="centrado"width="11%">{{$data[$i] -> CON_NOTA}}</td>  

        </tr>
          
        @endfor 
  
         </tbody>   
</table>
<br><br><br><br><br>
<table border="0px">
 <tr>
 <td scope="row"  style="width:50%; height:auto;"  >
    <p id="centrado"  style="font-size:13px"><B>REALIZADO POR</B><br><br><br></p>
    <p id="centrado">
    Ing. Edgar F. Montaluisa P. MSc. <br>
    JEFE DEL LABORATORIO DE REDES E INFORMATICA
    </p>
  </td>
  <td  scope="row"id="centrado">
 
  </td>
 </tr>
</table>

</body>
</html>