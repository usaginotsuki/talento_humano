<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por:Lorena Perez - David Esparza 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Docente'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p>

    <form action="{{url('/docente/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="DOC_CODIGO" value="{{ $docente->DOC_CODIGO }}">

        <div class="form-group">
            <label for="DOC_CEDULA">Cedula <span style="color:#FF0000";>*</span></label>
            <input type="text" class="form-control" id="DOC_CEDULA" name="DOC_CEDULA" value="{{ $docente->DOC_CEDULA }}" required>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="DOC_MIESPE">Mi Espe <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="DOC_MIESPE" name="DOC_MIESPE" value="{{ $docente->DOC_MIESPE }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                     <label for="DOC_NOMBRES">Nombres <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="DOC_NOMBRES" name="DOC_NOMBRES" value="{{ $docente->DOC_NOMBRES }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                     <label for="DOC_APELLIDOS">Apellidos <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="DOC_APELLIDOS" name="DOC_APELLIDOS" value="{{ $docente->DOC_APELLIDOS }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                      <label for="DOC_CORREO">Correo <span style="color:#FF0000";>*</span></label>
                    <input type="email" class="form-control" id="DOC_CORREO" name="DOC_CORREO" value="{{ $docente->DOC_CORREO }}" required>
                </div>
            </div>
        </div>

        <div class="row">
           
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CLAVE">Clave</label>
                    <input type="text" class="form-control" id="DOC_CLAVE" name="DOC_CLAVE" value="{{ $docente->DOC_CLAVE }}" required> 
                </div>
            </div>
        

      
            <div class="col">
                <div class="form-group">
                    <label for="DOC_TITULO">Titulo</label>
                    <input type="text" class="form-control" id="DOC_TITULO" name="DOC_TITULO" value="{{ $docente->DOC_TITULO }}">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('docente')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection