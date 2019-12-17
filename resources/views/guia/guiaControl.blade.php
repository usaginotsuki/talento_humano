@extends('app')
@section('content')   
<div class="jumbotron">
    @if (!empty($guias_pendientes)) 
<h2>Guias: {{$guias_pendientes[0] -> MAT_ABREVIATURA}} </h2>
    @endif
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    
            <h4 class="alert-heading"><b>ADVERTENCIA:</b> Existen {{$pendientes}}  Guías Pendiente de Entregar y {{$por_crear}} Guias Pendientes por Crear - Por favor, Revice el detalle al final de esta pantalla</h4>
 </div>        
</div>
<div class="container">
@if (session('title') && session('subtitle'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">{{ session('title') }}</h4>
            <p>{{ session('subtitle') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="col">
                <a href="{{url('guia/crearGuia')}}" class="btn btn-primary mb-2">Crear Guías</a>
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
            
                @for ($i=sizeof($guias_terminadas)-1;$i>=0;$i--)
                <tr>
                    <td scope="row">{{$guias_terminadas[$i] -> GUI_NUMERO}}</td>
                    <td scope="row">{{$guias_terminadas[$i] -> GUI_FECHA}}</td>
                    <td scope="row">{{$guias_terminadas[$i] -> GUI_TEMA}}</td> 
                    <td scope="row">{{$guias_terminadas[$i] -> LAB_NOMBRE}}</td>
                    <td scope="row">
                        <a href="{{url('reporte/pdfGuia/'.$guias_terminadas[$i]->GUI_CODIGO)}}" class="btn btn-info mb-2"><span class="oi oi-print"></span></a>
                    </td> 
                    @if($guias_terminadas[$i]->GUI_REGISTRADO==1) 
                        <td scope="row">
                            <span class="badge badge-success">Entregada</span>
                        </td>
                        <td scope="row">
                        </td>
                    @else
                        <td scope="row">
                            <span class="badge badge-danger">Pendiente</span>
                        </td>
                        {{--*/$valido=0/*--}}
                        @for ($j=$i+1;$j<=sizeof($guias_terminadas)-1;$j++)
                            @if($guias_terminadas[$j]->GUI_REGISTRADO==1)
                                {{-- */$valido=0/*--}}
                            @else
                                {{--*/$valido=1/*--}}
                                {{--*/ $j=sizeof($guias_terminadas) /*--}}
                            @endif
                        @endfor
                        @if($valido==0)
                                <td scope="row">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{url('guia/'.$guias_terminadas[sizeof($guias_terminadas)-1]->GUI_CODIGO.'/edit')}}" class="btn btn-primary mb-2"><span class="oi oi-pencil"></span></a>
                                            <a href="{{url('guia/'.$guias_terminadas[sizeof($guias_terminadas)-1]->GUI_CODIGO.'/destroy')}}" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></a>
                                        </div>
                                </td>
                            @else
                                <td scope="row">
                                </td>
                            @endif
                    @endif
                </tr>    
                @endfor
            @endif
            </tbody>
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
                        <b>OCASIONAL</b>
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
                            <span class="badge badge-success">Entregada</span>
                        @endif
                    @endif
                </td>
            </tr>    
        @endforeach 
        </tbody>
    </table>
</div>

@endsection()