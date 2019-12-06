<!--
 Sistema de Gestion de Laboratorios - ESPE
 
 Author: Lorena Perez-David Esparza
 Revisado por: Lorena Perez-David Esparza
 -->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Laboratorio'))
    
<div class="container-fluid">
    <form action="{{url('/objeto/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="OBR_CODIGO" value="{{ $objeto->OBR_CODIGO }}">

        <div class="container-fluid">
                <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
                <div class="row" >
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_NOMBRE">Nombre<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="OBR_NOMBRE" name="OBR_NOMBRE" placeholder="Nombre del Objeto" value="{{ $objeto->OBR_NOMBRE }}" required>
                        </div>
                    </div>
                   
            
                 
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_DESCRIPCION">Descripcion<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="OBR_DESCRIPCION" name="OBR_DESCRIPCION"  value="{{ $objeto->OBR_DESCRIPCION }}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_OBSERVACION">Observacion<span style="color:#FF0000";></span></label>
                        <input type="text" class="form-control" id="OBR_OBSERVACION" value="{{ $objeto->OBR_OBSERVACION }}" name="OBR_OBSERVACION"  >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_FECHA_RECEPCION">Fecha Recepcion<span style="color:#FF0000";>*</span></label>
                            <input type="date" class="form-control" id="OBR_FECHA_RECEPCION" name="OBR_FECHA_RECEPCION" value="{{ $objeto->OBR_FECHA_RECEPCION }}"  required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_FECHA_ENTREGA">Fecha Entrega<span style="color:#FF0000";></span></label>
                        <input type="date" class="form-control" id="OBR_FECHA_ENTREGA" name="OBR_FECHA_ENTREGA" value="{{ $objeto->OBR_FECHA_ENTREGA }}"  >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_IMAGEN">Imagen<span style="color:#FF0000";>*</span></label>
                            <input type="file"  class="form-control" id="OBR_IMAGEN" name="OBR_IMAGEN" accept="image/jpeg, image/png" value="{{ $objeto->OBR_IMAGEN }}" required>
                        </div>
                    </div>
                    <div class="col">
                      
                        <div class="form-group">
                            <label for="OBR_ESTADO">Estado Objeto<span style="color:#FF0000";>*</span></label>
                            <select type="input" class="form-control" id="OBR_ESTADO" name="OBR_ESTADO" placeholder="Campus"  required>
                                    @if($objeto->OBR_ESTADO == 0)
                                        <option value="0" selected>DAÑADO</option>
                                        <option value="1" >FUNCIONAL</option>
                                    @else
                                        @if($objeto->OBR_ESTADO == 1)
                                        
                                            <option value="1" selected>FUNCIONAL</option>
                                            <option value="0" >DAÑADO</option>
                                        @endif
                                    @endif
                                 
                                
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="PER_CODIGO">Periodo<span style="color:#FF0000";>*</span></label>
                            <select type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" placeholder="Campus"  required>
                            @foreach ($periodo as $per)
                                    @if($per->PER_CODIGO == $objeto->PER_CODIGO)
                                        <option value="{{$per->PER_CODIGO}}" selected>{{$per->PER_NOMBRE}}</option>
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
                                    @if($emp->EMP_CODIGO == $objeto->EMP_CODIGO)
                                        <option value="{{$emp->EMP_CODIGO}}" selected>{{$emp->EMP_NOMBRE}}</option>
                                    @else
                                        <option  value="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                                    @endif
 
                                    
                            @endforeach
                        </select> 
                    </div>
                </div>
              
            </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('objeto')}}" class="btn btn-danger mb-2">Cancelar</a>
        </div>

      
    </form>
</div>
@endsection