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
   font-size: 11px;
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


@page { margin: 150px 50px; }
    #header { position: fixed; left: 58pt; top: -100px; right: 29pt;  background-color:; text-align: center;  font-family:sans-serif; font-size:11pt; }
    #footer { position: fixed; left: 50pt; bottom: -235px; right: 29px; height: 150px; }
    #footer .page:after {  counter-increment: pages; content: counter(page)  }
    

</style>
</head>

<body>

<div id="header" > 
      <div  >
          <img  style='height: 100%; width: 100%;' src="{{$empresa->EMP_IMAGEN_ENCABEZADO}}" alt="Error Header">
      </div>
      <hr style="size:1px;color:SILVER; " />
      <div style="margin-top: 3px;   margin-bottom:px;" >
        
        <table  border="0px"  >
                <thead >
                    <tr>
                      <td scope="row"  width="4%"> <b>REPORTE</td>
                      <td scope="row" id="izquierda"width="30%">: MATERIAS POR CARRERA </td>
                    
                    
                    </tr>
                </thead>
          </table>
          <table border="0px" >
                <thead>
                    <tr>
                      <td scope="row"  width="4%"> <b>PERIODO</b> </td>
                      <td scope="row" width="9%">: {{$periodox->PER_NOMBRE}}  </td>
                  
                    
                      <td scope="row" id="derecha" width="5%"> <b> CARRERA</b> </td>
                   
                      <td scope="row" id="izquierda" width="16%">: {{$carrerax->CAR_NOMBRE}}   </td>  
                      
                  
                                         
                    </tr>
                </thead>
          </table>
          
        </div>
        <hr style="size:1px;color:SILVER; "/>
</div>

<div id="footer"  >
    <hr style="size:1px;color:SILVER;  margin-bottom:0px;" >
  	<table border="0px" id="foot" >
        <thead>
            <tr>
                      
              <td scope="row" id="izquierda" width="33%"> <b> SG-LAB</b> </td>
              <td scope="row" id="centrado" width="34%"> 
              <b>Página </b> <b  class="page"></b> 
              </td>
              <td scope="row" id="derecha" width="33%"><b> {{$fechaActual}} <b>  </td>
                      
            </tr>
        </thead>
    </table>
</div>


<div class="page" id="margenes" >
    <div  >
       <div style="margin-top: 30px;   margin-bottom:px;" >
       <table>
         <tbody >
              <tr>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="4%" >  <b>ORD</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="10%" ><b>MATERIA</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row"  width="5%"> <b>NRC</b></td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="18%" > <b>DOCENTE</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="4%" > <b>CREDITOS</b> </td>
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="4%" > <b>ESTUDIANTES</b> </td>             
                    <td style="text-align: center; vertical-align: middle;" scope="row" width="27%" > <b>ABREVIATURA</b> </td>
              </tr>      
              @for ($i = 0; $i < count($materias); $i++)
              <tr>
                      <td  scope="row" id="centrado" width="4%">{{$i}}</td> 
                      <td style="text-align: center; vertical-align: middle;" scope="row" id="centrado" width="4%">{{$materias[$i] -> MAT_NOMBRE}}</td>
                      <td style="text-align: left; vertical-align: middle;"  scope="row" id="centrado" width="10%">{{$materias[$i]->MAT_NRC}}</td>
                      <td   style="text-align:center; vertical-align: middle;" scope="row" id="centrado" width="18%"> {{$materias[$i] -> docente->DOC_NOMBRES.' '.$materias[$i]->docente->DOC_APELLIDOS}}</td>
                      <td  style="text-align: center; vertical-align: middle;" scope="row" id="centrado" width="4%"> {{$materias[$i] -> MAT_CREDITOS}}</td>
                      <td  style="text-align: center; vertical-align: middle;" scope="row" id="centrado" width="4%">{{$materias[$i] -> MAT_NUM_EST}}</td>  
                      <td  style="text-align: left; vertical-align: middle;" scope="row" id="centrado" width="27%">{{$materias[$i] -> MAT_ABREVIATURA}}</td>  
             
              </tr>
            @endfor 
         </tbody>   
      </table>
      <br><br><br><br><br>
      <table border="0px" >
          <tr>
              <td scope="row"  style="width:60%; height:auto;"  >
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