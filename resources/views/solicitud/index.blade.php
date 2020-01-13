@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Solicitudes'))

</div>
<div class="container-fluid">
    <a href="{{url('solicitud/create')}}" class="btn btn-success mb-2">Crear Solicitud</a>
    <a href="{{URL::previous()}}" class="btn btn-danger mb-2">Regresar a Guías</a>

    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row"># Solicitud</th>
                <th scope="row">Fecha de uso</th>
                <th scope="row">Tema</th>
                <th scope="row">Laboratorio</th>
                <th scope="row">PDF</th>
                <th scope="row">Estado</th>
                <th scope="row">Estado</th>
            </tr>
        </thead>
        <tbody>
        @if(!empty($solicitudes))
        
            @foreach ($solicitudes as $solicitud)
            <tr>
                <td scope="row">{{$solicitud->SOL_NUMERO}}</td>
                <td scope="row">{{$solicitud->SOL_FECHA_USO}}</td>
                <td scope="row">{{$solicitud->SOL_TEMA_PRACTICA}}</td>
                <td scope="row">{{$solicitud->laboratorio->LAB_NOMBRE}}</td>
                <td scope="row">
                    <a href="{{url('reporte/pdfSolicitud/'.$solicitud->SOL_CODIGO)}}" class="btn btn-info mb-2"><span class="oi oi-print"></span></a>
                </td> 
                @if($solicitud->SOL_ESTADO == 1) 
                    <td scope="row">
                        <span class="badge badge-success">Aprobado</span>
                    </td>
                    <td scope="row">
                    </td>
                @else
                    <td scope="row">
                        <span class="badge badge-danger">No Aprobado</span>
                    </td>
                @endif
            </tr>    
            @endforeach
        @endif
        </tbody>
    </table>
</div>

@endsection()