<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: Lorena Perez-David Esparza
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Docente'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p>
    <form action="{{url('/docente/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="row">
       <div class="col">
            <div class="form-group">
                 <label for="DOC_CEDULA">Cedula <span style="color:#FF0000";>*</span></label>
                <input type="text" class="form-control" id="DOC_CEDULA" name="DOC_CEDULA" maxlength="10" placeholder="Cedula del docente" required pattern="[0-9]{10}">
            </div>
        </div>    
        <div class="col">
                <div class="form-group">
                     <label for="DOC_MIESPE">Mi Espe <span style="color:#FF0000";>*</span></label>
                    <input type="text"  class="form-control" id="DOC_MIESPE" name="DOC_MIESPE"  placeholder="Usuario de Mi espe" required>
                </div>
        </div>
  </div>


  <div class="row">
       <div class="col">
                <div class="form-group">
                    <label for="DOC_NOMBRES">Nombres <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="DOC_NOMBRES" name="DOC_NOMBRES"  placeholder="Nombres del docente" required>
                </div>
        </div>
      

       
        <div class="col">
                <div class="form-group">
                     <label for="DOC_APELLIDOS">Apellidos <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" id="DOC_APELLIDOS" name="DOC_APELLIDOS"  placeholder="Apellidos del docente" required>
                </div>
        </div>
     </div>   
  <div class="row">
            <div class="col">
                <div class="form-group">
                     <label for="DOC_CORREO">Correo <span style="color:#FF0000";>*</span></label>
                    <input type="email" class="form-control" id="DOC_CORREO" name="DOC_CORREO"  placeholder="Correo del docente" required>
                </div>
            </div>


            <div class="col">
                <div class="form-group">
                    <label for="DOC_CLAVE">Clave<span style="color:#FF0000";>*</span></label>
                    <input type="password" class="form-control" id="DOC_CLAVE" name="DOC_CLAVE"  placeholder="Clave del docente" required>
                </div>
            </div>
     </div>  
     <div class="row">       
            <div class="col">
                <div class="form-group">
                   
                    <label for="DOC_TITULO">Titulo </label>
                    <input type="text" class="form-control" id="DOC_TITULO" name="DOC_TITULO"  placeholder="Titulo del docente">
                </div>
            </div>
             <div class="col">
             <div class="form-group">
              </div>  
       </div> 
      </div> 

        
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2" onclick="validar()">Crear</button>
        <a href="{{url('docente')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection