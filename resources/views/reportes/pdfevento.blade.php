<!DOCTYPE html>
<html>
<head>
<style type="text/css">
table {
   width: 100%;
   border-collapse:collapse;
   border: 2px solid black;

}
th, td {
   text-align: left;
   vertical-align: top;
   border:  solid #000;
   border: 2px solid black;
   font-size: 12px
   border-collapse:collapse;
}
#margenes{
  margin-top: 0px;
  margin-bottom: 50px;
  margin-right: 40px;
  margin-left: 80px;
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
#derecha{
 
  vertical-align:middle;
  text-align:right;

}
#izquierda{
 
 vertical-align:middle;
 text-align:left;

}
p{
  font-size:9px;
}

@page { margin: 150px 50px; }
    #header { position: fixed; left: 80px; top: -120px; right: 40px;  background-color:; text-align: center; }
    #footer { position: fixed; left: 0px; bottom: -180px; right: 0px; height: 150px; background-color: ; }
    #footer .page:after { content: counter(page, upper-roman); }

</style>
</head>

<body>
<div id="header" > 
      <div  >
          <img  style='height: 100%; width: 100%;' src="http://webltga.espe.edu.ec/sg-lab/images/encabezado.png"  >
      </div>
      <hr/>
      <table  border="0px" >
              <thead >
                  <tr>
                    <td scope="row"  width="4%"> <b>REPORTE</td>
                    <td scope="row" id="izquierda"width="30%">: REPORTE EVENTOS OCASIONALES REGISTRADOS </td>
                  
                  
                  </tr>
              </thead>
        </table>
        <table border="0px" >
              <thead>
                  <tr>
                    <td scope="row"  width="4%"> <b>PERIODO</b> </td>
                    <td scope="row" width="9%">: {{$data[0]->PER_NOMBRE}}  </td>
                    <td scope="row" id="derecha" width="5%"> <b> FECHAS</b> </td>
                    <td scope="row" id="izquierda" width="16%">: DE {{$fechaInicial}} AL {{$fechaFinal}}  </td>
                    
                  </tr>
              </thead>
        </table>
        <hr/>

  </div>

<div class="page" id="margenes" >
    <div  >
       <table>
         <tbody >
              <tr>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="4%" >  <b>ORD</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="10%" ><b>FECHA</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row"  width="15%"> <b>SALAS</b></td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="23%" > <b>MATERIA</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="20%" > <b>DOCENTE</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="11%" > <b>HORAS</b> </td>             
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="11%" > <b>NOTA</b> </td>
              </tr>      
            @for ($i = 0; $i < count($data); $i++)
              <tr>
                      <td  scope="row" id="centrado" width="4%">{{$i}}</td>
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
                  <p id="centrado"  style="font-size:13px">
                      <B>REALIZADO POR</B>
                      <br><br><br>
                  </p>
                  <p id="centrado">
                      Ing. Edgar F. Montaluisa P. MSc. 
                      <br>
                      JEFE DEL LABORATORIO DE REDES E INFORMATICA
                  </p>
              </td>
              <td  scope="row"id="centrado">
              </td>
          </tr>
      </table>
    </div>  
</div >
</body>
</html>