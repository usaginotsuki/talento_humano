<!-- 
    Sistema de Gestion de Laboratorios - ESPE

    Author: Antony Andrade - Jonel Lopez
    Revisado por: Andrade - Jonel Lopez
-->

@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Hora'))

<div class="container-fluid">
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
    <form action="{{url('/hora/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">

            <div class="col">
                <div class="form-group">
                    <label for="EMP_CODIGO">Empresa<span style="color:#FF0000";>*</span></label>
                    <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO" placeholder="Empresa"  required>
                            @foreach ($empresas as $emp)
                                    <option value="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                            @endforeach
                     </select> 
                </div>
            </div>

            <div class="col">
                    <div class="form-group">
                        <label for="HORA_INICIO">Hora Inicio<span style="color:#FF0000";>*</span></label>
                        <input type="time" class="form-control" id="HORA_INICIO" name="HORA_INICIO"  required>
                    </div>
                </div>
            <div class="col">
                <div class="form-group">
                    <label for="HORA_FIN">Hora Fin<span style="color:#FF0000";>*</span></label>
                    <input type="time" class="form-control" id="HORA_FIN" name="HORA_FIN"  required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('hora')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection