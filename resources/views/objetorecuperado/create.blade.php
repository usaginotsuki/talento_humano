<!--
 Sistema de Gestion de Laboratorios - ESPE

 -->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Laboratorio'))

<div class="container-fluid">
    <form action="{{url('/objeto/store')}}" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
     
            <div class="container-fluid">
                <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
                <div class="row" >
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_NOMBRE">Nombre<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="OBR_NOMBRE" name="OBR_NOMBRE" placeholder="Nombre del Objeto" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_DESCRIPCION">Descripcion<span style="color:#FF0000";>*</span></label>
                            <input type="text" class="form-control" id="OBR_DESCRIPCION" name="OBR_DESCRIPCION"  required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_OBSERVACION">Observacion<span style="color:#FF0000";></span></label>
                        <input type="text" class="form-control" id="OBR_OBSERVACION" name="OBR_OBSERVACION"  >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_FECHA_RECEPCION">Fecha Recepcion<span style="color:#FF0000";>*</span></label>
                            <input type="date" class="form-control" id="OBR_FECHA_RECEPCION" name="OBR_FECHA_RECEPCION"  required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_FECHA_ENTREGA">Fecha Entrega<span style="color:#FF0000";></span></label>
                        <input type="date" class="form-control" id="OBR_FECHA_ENTREGA" name="OBR_FECHA_ENTREGA"  >
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
                    <div class="col">
                        <div class="form-group">
                            <label for="OBR_ESTADO">Estado Objeto<span style="color:#FF0000";>*</span></label>
                            <select type="input" class="form-control" id="OBR_ESTADO" name="OBR_ESTADO" placeholder="Campus"  required>
                                 <option value="0">DAÑADO</option>
                                 <option value="1">FUNCIONAL</option>
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
                <a href="{{url('objeto')}}" class="btn btn-danger mb-2">Cancelar</a>
            </div>
    </form>
</div>
@endsection