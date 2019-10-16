
<h2 style="text-align: center;">Materias por Carrera</h2>
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
                <th scope="col">#</th>
                <th scope="col">MATERIA</th>
                <th scope="col">NRC</th>
                <th scope="col">DOCENTE</th>
                <th scope="col">CREDITOS</th>
                <th scope="col">ESTUDIANTES</th>
                <th scope="col">ABREVIATURA</th>
                <!--<th scope="col">MI ESPE</th>
                <th scope="col">CLAVE DOC</th>
                <th scope="col">COD LABORATORIO</th>
                <th scope="col">CAR CODIGO</th>
                <th scope="col">PERIODO COD</th>
                <th scope="col">OBSERVACION</th>
                <th scope="col">CON CODIGO</th>
                <th scope="col">MAT CODIGO</th>



                <th scope="col">FECHA INICIO</th>
                <th scope="col">FECHA FIN</th>
                <th scope="col">Acciones</th>-->
            </tr>
        </thead>
         <tbody >
        @foreach ($materias as $mat)
        <tr>
       
            <td scope="row">{{$mat ->MAT_CODIGO}}</td>
            <td scope="row">{{$mat ->MAT_NOMBRE}}</td>
            <td scope="row">{{$mat ->MAT_NRC}}</td>
            <td scope="row">{{$mat->docentes->DOC_NOMBRES.' '.$mat->docentes->DOC_APELLIDOS}}</td>
            <td scope="row">{{$mat ->MAT_CREDITOS}}</td>
            <td scope="row">{{$mat ->MAT_NUM_EST}}</td>
            <td scope="row">{{$mat ->MAT_ABREVIATURA}}</td>



            
          
        @endforeach
         </tbody>   
</table>