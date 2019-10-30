@extends('app')
@section('content')   
<div class="jumbotron">
<h2>Guias: {{$guias_terminadas[0] -> MAT_ABREVIATURA}} </h2>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h4 class="alert-heading"><b>ADVERTENCIA:</b> Existen {{$pendientes}}  Guías Pendiente de Entrega - Por favor, Realice el detalle al final de esta pantalla</h4>
 </div>        

</div>
<div class="container">
    <div class="col">
                <a href="{{url('guia/create')}}" class="btn btn-primary mb-2">Crear Guías</a>
    </div>
    <table   class="table table-hover table-bordered results">
            <thead>
                <tr>
                    <th scope="row">Guías Número</th>
                    <th scope="row">Fecha</th>
                    <th scope="row">Tema</th>
                    <th scope="row">Laboratorio</th>
                    <th scope="row"></th>
                    <th scope="row"></th>
                </tr>
            </thead>
            <tbody>
            @if(!empty($guias_terminadas))
                <tr>
                    <td scope="row">{{$guias_terminadas[sizeof($guias_terminadas)-1] -> GUI_NUMERO}}</td>
                    <td scope="row">{{$guias_terminadas[sizeof($guias_terminadas)-1] -> GUI_FECHA}}</td>
                    <td scope="row">{{$guias_terminadas[sizeof($guias_terminadas)-1] -> GUI_TEMA}}</td> 
                    <td scope="row">{{$guias_terminadas[sizeof($guias_terminadas)-1] -> LAB_NOMBRE}}</td>
                    <td scope="row">
                    <a href="" class="btn btn-info mb-2"><span class="oi oi-print"></span></a>
                    </td> 
                    <td scope="row">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{url('guia/'.$guias_terminadas[sizeof($guias_terminadas)-1]->GUI_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                            <a href="{{url('guia/'.$guias_terminadas[sizeof($guias_terminadas)-1]->GUI_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
                        </div>
                    </td>
                </tr>
            
                @for ($i=sizeof($guias_terminadas)-2;$i>=0;$i--)
                <tr>
                    <td scope="row">{{$guias_terminadas[$i] -> GUI_NUMERO}}</td>
                    <td scope="row">{{$guias_terminadas[$i] -> GUI_FECHA}}</td>
                    <td scope="row">{{$guias_terminadas[$i] -> GUI_TEMA}}</td> 
                    <td scope="row">{{$guias_terminadas[$i] -> LAB_NOMBRE}}</td>
                    <td scope="row">
                    <a href="" class="btn btn-info mb-2"><span class="oi oi-print"></span></a>
                    </td> 
                    <td scope="row">
                       
                    </td>
                </tr>    
            </tbody>
            @endfor
            @endif
    </table>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th colspan="6">DETALLE DE ASIGNACION Y USO DE LABORATORIO</th>
            </tr>
            <tr>
                <th scope="row">FECHA</th>
                <th scope="row">TIPO</th>
                <th scope="row">HORAS ASIGNADAS</th>
                <th scope="row">HORA ENTRADA</th>
                <th scope="row">HORA SALIDA</th>
                <th scope="row">GUIA ENTREGADA</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($guias_pendientes as $guiap)
            <tr>
                <td scope="row">{{$guiap -> CON_DIA}}</td>
                <td scope="row">
                    @if ($guiap -> CON_EXTRA!==1)
                        HORA
                    @else
                        <b>OCACIONAL</b>
                    @endif
                </td>
                <td scope="row">{{$guiap -> CON_NUMERO_HORAS}}</td> 
                <td scope="row">{{$guiap -> CON_HORA_ENTRADA}}</td>
                <td scope="row">{{$guiap -> CON_HORA_SALIDA}}</td> 
                <td scope="row">
                    @if($guiap ->CON_EXTRA==1)
                        ****
                    @else
                        @if ($guiap -> CON_GUIA!==1)
                            <span class="badge badge-danger">Pendiente</span>
                        @else
                            <span class="badge badge-success">Terminada</span>
                        @endif
                    @endif
                </td>
            </tr>    
        @endforeach 
        </tbody>
    </table>
</div>

@endsection()