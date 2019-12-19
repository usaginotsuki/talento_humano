<!--
 Sistema de Gestion de Laboratorios - ESPE

 -->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Noticia'))

<div class="container-fluid">
    <form action="{{url('/noticia/store')}}" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
     
            <div class="container-fluid">
                <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
                <div class="row" >
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_NOMBRE">Nombre<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="NOT_NOMBRE" name="NOT_NOMBRE" placeholder="Nombre Noticia" required>
                        </div>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_TITULO">Titulo<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="NOT_TITULO" name="NOT_TITULO" placeholder="Titulo" required>
                        </div>
                    </div>
                    <div class="col">
                        
                        <div class="form-group">
                            <label for="NOT_DESCRIPCION">Descripcion<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="NOT_DESCRIPCION" name="NOT_DESCRIPCION"  required>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_FECHA_INICIO">Fecha Inicio<span style="color:#FF0000";>*</span></label>
                            <input type="date" class="form-control" id="NOT_FECHA_INICIO" name="NOT_FECHA_INICIO"  required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="NOT_FECHA_FIN">Fecha Fin<span style="color:#FF0000";></span></label>
                        <input type="date" class="form-control" id="NOT_FECHA_FIN" name="NOT_FECHA_FIN" required >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="image">Imagen<span style="color:#FF0000";>*</span></label>
                            <input type="file"  class="form-control" id="image" name="image" accept="image/*" required>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="PER_CODIGO">Periodo<span style="color:#FF0000";>*</span></label>
                            <select type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" placeholder="Campus"  required>
                            @foreach ($periodo as $per)
                                    <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                            @endforeach
                            </select> 
                        </div>
                    </div>
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
                </div>
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mb-2">Crear</button>
                <a href="{{url('noticia')}}" class="btn btn-danger mb-2">Cancelar</a>
            </div>
    </form>
</div>
@endsection