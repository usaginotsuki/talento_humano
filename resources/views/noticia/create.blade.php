<!--
 Sistema de Gestion de Laboratorios - ESPE

 -->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Noticia'))

<div class="container-fluid">
    <div align="center">
        <img src="{{URL::asset('images/icons/imgicon.png')}}" alt="seleccione una imagen" id="pic" width="100" height="100" />
    
    </div>
    <br>
    <div class="card border-primary mb-3">
        <div class="card-header">Recomendaciones</div>
        <div class="card-body text-primary">
            <h5 class="card-title">Imagen</h5>
            <p class="card-text">Se recomienda seleccionar imagenes con una dimensión de la imagen a 200x200 y fondo blanco.</p>
        </div>
    </div>
    <form action="{{url('/noticia/store')}}" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" class="form-control" id="IMAGE_TEXT" name="IMAGE_TEXT"  >
            <div class="container-fluid">
                <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
                <div class="row" >
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_TITULO">Titulo<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="NOT_TITULO" name="NOT_TITULO" placeholder="Titulo" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="image">Imagen<span style="color:#FF0000";></span></label>
                            <input type="file" onchange="getbase64image(this)"  style="display:none;" class="form-control" id="image" name="image" accept="image/*"  ><br> 
                            <a href="javascript:document.getElementById('image').click(); " class="btn btn-primary mb-2">Agregar Imagen</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    <div class="col">    
                        <div class="form-group">
                            <label for="NOT_DESCRIPCION">Descripcion<span style="color:#FF0000";>*</span></label>
                            <textarea type="text" maxlength="460"  class="form-control" id="NOT_DESCRIPCION" name="NOT_DESCRIPCION"  required ></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_FECHA_INICIO">Fecha Inicio<span style="color:#FF0000";>*</span></label>
                            <input type="date" class="form-control" onchange="validarDateNoticias()"  id="NOT_FECHA_INICIO" name="NOT_FECHA_INICIO" required>
                            <input type="date" class="form-control" style="display:none;" id="f1" name="f1"   >
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_FECHA_FIN">Fecha Fin<span style="color:#FF0000";></span></label>
                            <input type="date" class="form-control" id="NOT_FECHA_FIN" onchange="validarDateNoticias()" name="NOT_FECHA_FIN" required >
                            <input type="date" class="form-control" style="display:none;" id="f2" name="f2"   >
                        </div>
                    </div>
                </div>
       
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="PER_CODIGO">Periodo<span style="color:#FF0000";>*</span></label>
                            <select type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" placeholder="Campus"  required>
                            @foreach ($periodos as $per)
                                @if($per->PER_CODIGO==$periodo->PER_CODIGO)
                                    <option  selected value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                                @else
                                    <option  value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                                @endif    
                            @endforeach
                            </select> 
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="EMP_CODIGO">Empresa<span style="color:#FF0000";>*</span></label>
                            <select type="input" class="form-control" id="EMP_CODIGO" name="EMP_CODIGO" placeholder="Empresa"  required>
                                @foreach ($empresas as $emp)
                                        @if($emp->EMP_CODIGO==$empresa->EMP_CODIGO)
                                        <option value="{{$empresa->EMP_CODIGO}} " selected >{{$empresa->EMP_NOMBRE}}</option>
                                        @endif
                                @endforeach
                            </select> 
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mb-2">Crear</button>
                <a href="{{url('noticia')}}" class="btn btn-danger mb-2">Cancelar</a>
            </div>
    </form>
</div>
@endsection
<script type="text/javascript" src="{{ URL::asset('js/base64image.js') }}"></script> 