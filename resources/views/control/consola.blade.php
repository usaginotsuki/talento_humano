@extends('app')
@section('content')

@include('shared.title', array('titulo' => 'Consola de Control'))


<div class="container fluid">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <br>
        <div class="col">
            <br>
            <form action="{{url('control/filtroCampus')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="radio" name="campus" value="1"> Campus Centro
                <input type="radio" name="campus" value="2"> Campus Belisario Quevedo
                <button  type="submit" class="btn btn-primary mb-2">Aplicar Filtro</button>
            </form>
            
        </div>
        <div class="col"><br>[admin]</div>
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">HORA ENTRADA</th>
                <th scope="col">HORA SALIDA</th>
                <th scope="col">SALA</th>
                <th scope="col">MATERIA</th>
                <th scope="col" colspan="3">GUIA</th>
            </tr>
        </thead>
        @foreach ($controles as $control)
        <tbody>
            <td scope="row">{{$control -> CON_HORA_ENTRADA}}</td>
            <td scope="row">{{$control -> CON_HORA_SALIDA}}</td>
            <td scope="row">{{$control -> laboratorio->LAB_NOMBRE}}</td>
            <td scope="row">{{$control -> materia->MAT_NOMBRE}} {{$control -> materia->MAT_NRC}}({{$control -> docente->DOC_MIESPE}})</td>
                <td>
                    {{--*/$oca = $control->materia->MAT_OCACIONAL/*--}}
                    <form action="{{url('control/updateD')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="CON_CODIGO" value="{{ $control->CON_CODIGO }}">
                        <input type="hidden" name="docente">
                        @if($control -> CON_REG_FIRMA_ENTRADA == null)
                            <button  type="submit" class="btn btn-success mb-2">Entrar</button>
                        @endif
                        @if($control -> CON_REG_FIRMA_ENTRADA != null)
                            <button  type="submit" class="btn btn-danger mb-2">Salir</button>
                        @endif
                    </form>
                   
                    <!--
                    @if ($oca == '1')
                        <img src="{{URL::asset('images/consola/guiaON.png')}}" >
                    @endif
                    @if ($oca == '0')
                        <img src="{{URL::asset('images/consola/guiaN.png')}}" >
                    @endif
                -->
                </td>
                <td></td>
                <td>
                    <form action="{{url('control/updateL')}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="CON_CODIGO" value="{{ $control->CON_CODIGO }}">
                        <input type="hidden" name="laboratorista">
                        @if($control -> CON_LAB_ABRE == null)
                            <button  type="submit" class="btn btn-success mb-2">Entrar</button>
                        @endif
                        @if($control -> CON_LAB_ABRE != null)
                            <button  type="submit" class="btn btn-danger mb-2">Cerrar</button>
                        @endif
                    </form>
                    
                </td>

        </tbody>
        @endforeach 
</table>

<script>
    function cambia(src){
        src = "";
        src ="{{URL::asset('images/consola/salir.png')}}";
        return src;
    }
    function cambia2(src){
        src = "";
        src ="{{URL::asset('images/consola/cerrar.png')}}";
        return src;
    }
</script>

<!-- BOTONES DE NAVEGACION -->
<!-- <div class="clearfix">
    <ul class="pagination">
        <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="page-item"><a href="#" class="page-link">1</a></li>
        <li class="page-item"><a href="#" class="page-link">2</a></li>
        <li class="page-item active"><a href="#" class="page-link">3</a></li>
        <li class="page-item"><a href="#" class="page-link">4</a></li>
        <li class="page-item"><a href="#" class="page-link">5</a></li>
        <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
    </ul> -->
</div>
@endsection