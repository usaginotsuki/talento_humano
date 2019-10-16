 
<div >
    <h1>PARAMETROS</h1>
</div>
 <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TODOS</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">SINO</th>
                <th scope="col">DESTINO</th>
                <th scope="col">DOC CODIGO</th>
                <th scope="col">Acciones</th>
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
        @foreach ($parametros as $par)
        <tr>
       
            <td scope="row">{{$par -> PAR_CODIGO}}</td>
            <td scope="row">{{$par -> PAR_TODOS}}</td>
            <td scope="row">{{$par ->empresas->EMP_NOMBRE}}</td>


            
            @if ($par->PAR_SINO == '0')
                <td scope="row">NO</td>
            @else
                <td scope="row">SI</td>
            @endif
            <td scope="row">{{$par -> PAR_DESTINO}}</td>
            <td scope="row">{{$par -> DOC_CODIGO}}</td>
            <!--<td scope="row">{{$par -> DOC_MIESPE}}</td>
            <td scope="row">{{$par -> DOC_CLAVE}}</td>
            <td scope="row">{{$par -> LAB_CODIGO}}</td>
            <td scope="row">{{$par -> CAR_CODIGO}}</td>
            <td scope="row">{{$par -> PER_CODIGO}}</td>
            <td scope="row">{{$par -> PAR_OBSERVACION}}</td>
            <td scope="row">{{$par -> CON_CODIGO}}</td>
            <td scope="row">{{$par -> MAT_CODIGO}}</td>


            <td scope="row">{{$par -> PAR_FECHA_INI}}</td>
            <td scope="row">{{$par -> PAR_FECHA_FIN}}</td>-->
            <td>
                <form action="{{url('/parametro/'.$par->PAR_CODIGO.'/destroy')}}" method="POST" class="float-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                </form>
                <a href="{{url('parametro/'.$par->PAR_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                &nbsp;
            </td>
       </tr>
        @endforeach
         </tbody>   
</table>