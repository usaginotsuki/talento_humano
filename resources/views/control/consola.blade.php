@extends('app')
@section('content')
@include ('shared.navbar')
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
            <input type="checkbox" name="centro" value="centro"> Campus Centro
            <input type="checkbox" name="belisario" value="belisario"> Campus Belisario Quevedo
            <a href="{{url('control/consola')}}" class="btn btn-primary mb-2">Aplicar Filtro</a>
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
                    <a href="{{url('')}}">
                        <img src="{{URL::asset('images/consola/entrar.png')}}" onclick="this.src = cambia(this.src);">
                    </a>
                    @if ($oca == '1')
                        <img src="{{URL::asset('images/consola/guiaON.png')}}" >
                    @endif
                    @if ($oca == '0')
                        <img src="{{URL::asset('images/consola/guiaN.png')}}" >
                    @endif
                </td>
                <td></td>
                <td>
                    <img src="{{URL::asset('images/consola/entrar.png')}}" onclick="this.src = cambia2(this.src);">
                    <a href="{{url('control/consola')}}">
                        <img src="{{URL::asset('images/consola/update.png')}}" >
                    </a>
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