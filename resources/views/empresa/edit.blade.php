<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Mauro Morales - Jerson Morocho
 * Revisado por: 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Editar Empresa'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif 
    <div align="center">
         @if(isset($empresa->EMP_IMAGEN_ENCABEZADO))
            <img src="{{$empresa -> EMP_IMAGEN_ENCABEZADO}}"  id="pic" width="500" height="200" />
         @else
            <img src="{{URL::asset('images/icons/imgicon.png')}}"  id="pic" width="100" height="100" />
         @endif   
    </div>
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p> 
   
    <h3>Código {{ $empresa->EMP_CODIGO }}: {{ $empresa->EMP_NOMBRE }}</h3> 
    <form action="{{url('/empresa/update')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="EMP_CODIGO" value="{{ $empresa->EMP_CODIGO }}">
        <input type="hidden" class="form-control" id="IMAGE_TEXT" name="IMAGE_TEXT" value="{{ $empresa->EMP_IMAGEN_ENCABEZADO }}"  >
        <div class="row"> 
            <div class="col">
                <div class="form-group">
                    <label for="EMP_NOMBRE">Nombre Laboratorio General <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="EMP_NOMBRE" value="{{$empresa->EMP_NOMBRE}}" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="EMP_FIRMA_DEE"> Director de Departamento <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="EMP_FIRMA_DEE" value="{{$empresa->EMP_FIRMA_DEE}}" required>                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="EMP_PIE_DEE:">Cargo del Director Departamento <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="EMP_PIE_DEE" value="{{$empresa->EMP_PIE_DEE}}" required>
                </div>
            </div>
            
            <div class="col">
                <div class="form-group">
                    <label for="EMP_FIRMA_JEFE">Jefe del Laboratorio <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="EMP_FIRMA_JEFE" value="{{$empresa->EMP_FIRMA_JEFE}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="EMP_PIE_JEFE">Cargo del Jefe de Laboratorio <span style="color:#FF0000";>*</span></label>
                    <input type="text"  class="form-control" name="EMP_PIE_JEFE" value="{{$empresa->EMP_PIE_JEFE}}" required>
                </div>
            </div>
            
            <div class="col">
                <div class="form-group">
                    <label for="EMP_FIRMA_LAB"> Laboratorista <span style="color:#FF0000";>*</span></label>
                    <input type="text"  class="form-control"  name="EMP_FIRMA_LAB" value="{{$empresa->EMP_FIRMA_LAB}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="EMP_PIE_LAB">Cargo del Laboratorista <span style="color:#FF0000";>*</span></label>
                    <input type="text"  class="form-control" name="EMP_PIE_LAB" value="{{$empresa->EMP_PIE_LAB}}" required>
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="EMP_RELACION_SUFICIENCIA">Relacion Suficiencia <span style="color:#FF0000";>*</span></label>
                    <input type="number"  class="form-control" name="EMP_RELACION_SUFICIENCIA" value="{{$empresa->EMP_RELACION_SUFICIENCIA}}" required>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="EMP_IMAGEN_ENCABEZADO">Imagen Encabezado <span style="color:#FF0000";>*</span></label>
                    @if(isset($empresa->EMP_IMAGEN_ENCABEZADO))
                         <input type="file" onchange="getbase64image(this)" class="form-control" id="image" name="image" accept="image/*" value="{{ $empresa->EMP_IMAGEN_ENCABEZADO }}" >
                   @else
                         <input type="file" onchange="getbase64image(this)" class="form-control" id="image" name="image" accept="image/*" value="{{ $empresa->EMP_IMAGEN_ENCABEZADO }}" required >
                   @endif
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    <label for="EMP_IMAGEN_ENCABEZADO2">Imagen Encabezado 2 <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" name="EMP_IMAGEN_ENCABEZADO2" value="{{$empresa->EMP_IMAGEN_ENCABEZADO2}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="EMP_AUX1">Auxiliar <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" name="EMP_AUX1" value="{{$empresa->EMP_AUX1}}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="EMP_AUX2">Auxiliar 2 <span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control" name="EMP_AUX2" value="{{$empresa->EMP_AUX2}}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="INS_CODIGO">Institucion <span style="color:#FF0000";>*</span></label>
                    <select class="form-control" id="INS_CODIGO" name="INS_CODIGO" placeholder="Institucion"  required>
                        @foreach ($instituciones as $ins)
                        @if($ins->INS_CODIGO == $empresa->INS_CODIGO)
                        <option value="{{$ins->INS_CODIGO}}" selected>{{$ins->INS_NOMBRE}}</option>
                        @else
                        <option value="{{$ins->INS_CODIGO}}">{{$ins->INS_NOMBRE}}</option>
                        @endif
                        @endforeach
                    </select> 
                </div>
            </div>

            <div class="col" style="display: flex;align-items: center;">
                <div class="custom-control custom-switch">
                    @if ($empresa->EMP_ESTADO !=1)
                    <input type="checkbox" class="custom-control-input" id="EMP_ESTADO" name="EMP_ESTADO">
                    @elseif ($empresa->EMP_ESTADO === 1)
                    <input type="checkbox" class="custom-control-input" id="EMP_ESTADO" name="EMP_ESTADO" checked>
                    @endif
                    <label class="custom-control-label" for="EMP_ESTADO">Estado del Laboratorio</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('empresa')}}" class="btn btn-danger mb-2">Cancelar</a> 
    </form>
</div> 
@endsection
<script type="text/javascript" src="{{ URL::asset('js/base64image.js') }}"></script> 