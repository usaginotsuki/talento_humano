<!-- 
    Sistema de Gestion de Laboratorios - ESPE

    Author: Antony Andrade - Jonel Lopez
    Revisado por: Andrade - Jonel Lopez
-->

@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Hora'))

<div class="container-fluid">
    <h3>CODIGO {{ $hora->HORA_CODIGO }}</h3>
    <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <form action="{{url('/hora/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="HORA_CODIGO" value="{{ $hora->HORA_CODIGO }}">
        <div class="row">

            <div class="col">
                <div class="form-group">
                    <label for="EMP_CODIGO">Empresa<span style="color:#FF0000";>*</span></label>
                    <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO"  required>
                        @foreach ($empresas as $emp)
                            @if($emp->EMP_CODIGO==$hora->EMP_CODIGO)
                                <option value="{{$emp->EMP_CODIGO}}" selected="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                            @else
                                <option value="{{$emp->EMP_CODIGO}}"  >{{$emp->EMP_NOMBRE}}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>

            <div class="col">
                    <div class="form-group">
                        <label for="HORA_INICIO">Hora Inicio<span style="color:#FF0000";>*</span></label>
                        <input type="time" class="form-control" id="HORA_INICIO" name="HORA_INICIO" placeholder="Hora" value="{{ $HORA_INICIO }}" required>
                    </div>
            </div>
            <div class="col">
                    <div class="form-group">
                        <label for="HORA_FIN">Hora Fin<span style="color:#FF0000";>*</span></label>
                        <input type="time" class="form-control" id="HORA_FIN" name="HORA_FIN" placeholder="Hora" value="{{ $HORA_FIN }}" required>
                    </div>
            </div>

        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('hora')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection