<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Materia'))

<div class="container-fluid">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <label style="color:#FF0000";>*</label> son obligatorios</h5></p>
    <form action="{{url('/materia/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="MAT_CODIGO" value="{{ $materia->MAT_CODIGO }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_CODIGO">Periodo <label style="color:#FF0000";>*</label></label>
                    <select type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" placeholder="PERIODO" required>
                        @if(isset($PER_CODIGO))
                            @foreach ($periodos as $per)
                                @if($per->PER_CODIGO==$PER_CODIGO)
                                    <option value="{{$per->PER_CODIGO}}" selected="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                                @else
                                    <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>      
                                @endif
                            @endforeach
                        @else  
                            @foreach ($periodos as $per)
                                @if($per->PER_CODIGO==$materia->PER_CODIGO)
                                    <option value="{{$per->PER_CODIGO}}" selected="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                                @else
                                    <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>      
                               @endif
                            @endforeach
                        @endif
                    </select> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CODIGO">Docente <label style="color:#FF0000";>*</label></label>
                    <select type="input" class="form-control" id="DOC_CODIGO" name="DOC_CODIGO" placeholder="DOCENTE" required >
                        @if(isset($DOC_CODIGO))
                            @foreach ($docentes as $doc)
                                @if($doc->DOC_CODIGO==$DOC_CODIGO)
                                    <option value="{{$doc->DOC_CODIGO}}" selected="{{$doc->DOC_CODIGO}}">{{$doc->DOC_APELLIDOS}} {{$doc->DOC_NOMBRES}}</option>
                                @else
                                    <option value="{{$doc->DOC_CODIGO}}">{{$doc->DOC_APELLIDOS}} {{$doc->DOC_NOMBRES}}</option>
                                @endif
                            @endforeach
                        @else  
                            @foreach ($docentes as $doc)
                                @if($doc->DOC_CODIGO==$materia->DOC_CODIGO)
                                    <option value="{{$doc->DOC_CODIGO}}" selected="{{$doc->DOC_CODIGO}}">{{$doc->DOC_APELLIDOS}} {{$doc->DOC_NOMBRES}}</option>
                                @else
                                    <option value="{{$doc->DOC_CODIGO}}">{{$doc->DOC_APELLIDOS}} {{$doc->DOC_NOMBRES}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAR_CODIGO">Carrera <label style="color:#FF0000";>*</label></label>
                    <select type="input" class="form-control" id="CAR_CODIGO" name="CAR_CODIGO" placeholder="CARRERA" required required >
                        @if(isset($CAR_CODIGO))
                            @foreach ($carreras as $car)
                                @if($car->CAR_CODIGO==$CAR_CODIGO)
                                      <option value="{{$car->CAR_CODIGO}}" selected="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                                @else
                                 <option value="{{$car->CAR_CODIGO}}"  >{{$car->CAR_NOMBRE}}</option>
                               @endif
                               @endforeach
                        @else 
                            @foreach ($carreras as $car)
                                @if($car->CAR_CODIGO==$materia->CAR_CODIGO)
                                      <option value="{{$car->CAR_CODIGO}}" selected="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                                @else
                                    <option value="{{$car->CAR_CODIGO}}"  >{{$car->CAR_NOMBRE}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_CODIGO_BANNER">Codigo Banner </label>
                    @if(isset($MAT_CODIGO_BANNER))
                        <input type="input" class="form-control" id="MAT_CODIGO_BANNER" name="MAT_CODIGO_BANNER" value="{{$MAT_CODIGO_BANNER}}">
                    @else  
                        <input type="input" class="form-control" id="MAT_CODIGO_BANNER" name="MAT_CODIGO_BANNER" value="{{$materia->MAT_CODIGO_BANNER}}">
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NRC">NRC <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NRC))
                        <input type="number" class="form-control" id="MAT_NRC" name="MAT_NRC" value="{{$MAT_NRC}}" required >
                    @else  
                        <input type="number" class="form-control" id="MAT_NRC" name="MAT_NRC" value="{{$materia->MAT_NRC}}" required >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NIVEL">Nivel</label>
                    @if(isset($MAT_NIVEL))
                        <input type="input" class="form-control" id="MAT_NIVEL" name="MAT_NIVEL" value="{{$MAT_NIVEL}}">
                    @else  
                        <input type="input" class="form-control" id="MAT_NIVEL" name="MAT_NIVEL" value="{{$materia->MAT_NIVEL}}">
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NOMBRE">Nombre<label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NOMBRE))
                        <input type="input" class="form-control" id="MAT_NOMBRE" name="MAT_NOMBRE" value="{{$MAT_NOMBRE}}" required>
                    @else  
                        <input type="input" class="form-control" id="MAT_NOMBRE" name="MAT_NOMBRE" value="{{$materia->MAT_NOMBRE}}" required>
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_CREDITOS">Créditos <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_CREDITOS))
                        <input type="number" type="number" class="form-control" id="MAT_CREDITOS" name="MAT_CREDITOS" value="{{$MAT_CREDITOS}}" required>    
                    @else  
                        <input type="number" type="number" class="form-control" id="MAT_CREDITOS" name="MAT_CREDITOS" value="{{$materia->MAT_CREDITOS}}" required>  
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NUM_EST">Número de estudiantes <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NUM_EST))
                        <input type="number" class="form-control" id="MAT_NUM_EST" name="MAT_NUM_EST" value="{{$MAT_NUM_EST}}" required>    
                    @else  
                        <input type="number" class="form-control" id="MAT_NUM_EST" name="MAT_NUM_EST" value="{{$materia->MAT_NUM_EST}}" required>
                    @endif    
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_ABREVIATURA">Abreviatura <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_ABREVIATURA))
                        <input type="input" class="form-control" id="MAT_ABREVIATURA" name="MAT_ABREVIATURA" value="{{$MAT_ABREVIATURA}}" required>  
                    @else  
                        <input type="input" class="form-control" id="MAT_ABREVIATURA" name="MAT_ABREVIATURA" value="{{$materia->MAT_ABREVIATURA}}" required>  
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_OCACIONAL">Es ocasional </label>
                </div>
                @if(isset($MAT_OCACIONAL))
                    @if($MAT_OCACIONAL=="1")
                        <div class="col" style="display: flex;align-items: center;">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL" checked="{{$MAT_OCACIONAL}}">
                                <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                            </div>
                        </div>
                    @else  
                        <div class="col" style="display: flex;align-items: center;">
                            <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL">
                                    <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                            </div>
                        </div>
                    @endif
                @else  
                    @if($materia->MAT_OCACIONAL=="1")
                        <div class="col" style="display: flex;align-items: center;">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL" checked="{{$materia->MAT_OCACIONAL}}">
                                <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                            </div>
                        </div>
                    @else  
                        <div class="col" style="display: flex;align-items: center;">
                            <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL">
                                    <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
        <div>
            <label></label>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('materia')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection