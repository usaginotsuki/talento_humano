@extends('app')
@section('content')
@include ('shared.navbar')
<div class="container">
    <h2>Crear Materia</h2>
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p>
    <form action="{{url('/materia/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_CODIGO">Periodo <span style="color:#FF0000";>*</span></label>
                    <select class="form-control" id="PER_CODIGO" name="PER_CODIGO">
                        @foreach ($periodos as $per)
                            @if(isset($PER_CODIGO))
                                @if($per->PER_CODIGO == $PER_CODIGO)
                                <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                                @else
                                <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>   
                                @endif  
                            @else 
                            <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>      
                            @endif  
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CODIGO">Docente <span style="color:#FF0000";>*</span></label>
                    <select class="form-control" id="DOC_CODIGO" name="DOC_CODIGO">
                        @foreach ($docentes as $doc)
                            @if(isset($DOC_CODIGO))
                                @if($doc->DOC_CODIGO == $DOC_CODIGO)
                                <option value="{{$doc->DOC_CODIGO}}" selected>{{$doc->DOC_TITULO}} {{$doc->DOC_NOMBRES}} {{$doc->DOC_APELLIDOS}}</option>
                                @else
                                <option value="{{$doc->DOC_CODIGO}}">{{$doc->DOC_TITULO}} {{$doc->DOC_NOMBRES}} {{$doc->DOC_APELLIDOS}}</option>
                                @endif
                            @else 
                            <option value="{{$doc->DOC_CODIGO}}">{{$doc->DOC_TITULO}} {{$doc->DOC_NOMBRES}} {{$doc->DOC_APELLIDOS}}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAR_CODIGO">Carrera <span style="color:#FF0000";>*</span></label>
                    <select class="form-control" id="CAR_CODIGO" name="CAR_CODIGO">
                        @foreach ($carreras as $car)
                            @if(isset($CAR_CODIGO))
                                @if($car->CAR_CODIGO == $CAR_CODIGO)
                                <option value="{{$car->CAR_CODIGO}}" selected>{{$car->CAR_NOMBRE}}</option>
                                @else
                                <option value="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                                @endif
                            @else 
                            <option value="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                            @endif
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_CODIGO_BANNER">Codigo Banner </label>
                    @if(isset($MAT_CODIGO_BANNER))
                        <input type="text" class="form-control" id="MAT_CODIGO_BANNER" name="MAT_CODIGO_BANNER" value="{{$MAT_CODIGO_BANNER}}">
                    @else  
                        <input type="text" class="form-control" id="MAT_CODIGO_BANNER" name="MAT_CODIGO_BANNER" placeholder="CODIGO BANNER" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NRC">NRC <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NRC))
                    <input type="text" class="form-control" id="MAT_NRC" name="MAT_NRC" value="{{$MAT_NRC}}" >
                    @else  
                    <input type="text" class="form-control" id="MAT_NRC" name="MAT_NRC" placeholder="NRC" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NIVEL">Nivel</label>
                    @if(isset($MAT_NIVEL))
                    <input type="text" class="form-control" id="MAT_NIVEL" name="MAT_NIVEL" value="{{$MAT_NIVEL}}">
                    @else  
                    <input type="text" class="form-control" id="MAT_NIVEL" name="MAT_NIVEL" placeholder="NIVEL" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NOMBRE">Nombre<label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NOMBRE))
                    <input type="text" class="form-control" id="MAT_NOMBRE" name="MAT_NOMBRE" value="{{$MAT_NOMBRE}}">
                    @else  
                    <input type="text" class="form-control" id="MAT_NOMBRE" name="MAT_NOMBRE" placeholder="NOMBRE DE LA MATERIA" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_CREDITOS">Créditos <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_CREDITOS))
                    <input type="text" class="form-control" id="MAT_CREDITOS" name="MAT_CREDITOS" value="{{$MAT_CREDITOS}}">    
                    @else  
                    <input type="text" class="form-control" id="MAT_CREDITOS" name="MAT_CREDITOS" placeholder="NUMERO DE CREDITOS" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NUM_EST">Número de estudiantes <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NUM_EST))
                    <input type="text" class="form-control" id="MAT_NUM_EST" name="MAT_NUM_EST" value="{{$MAT_NUM_EST}}">    
                    @else  
                    <input type="text" class="form-control" id="MAT_NUM_EST" name="MAT_NUM_EST" placeholder="NUMERO DE ESTUDIANTES" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_ABREVIATURA">Abreviatura <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_ABREVIATURA))
                    <input type="text" class="form-control" id="MAT_ABREVIATURA" name="MAT_ABREVIATURA" value="{{$MAT_ABREVIATURA}}">  
                    @else  
                    <input type="text" class="form-control" id="MAT_ABREVIATURA" name="MAT_ABREVIATURA" placeholder="ABREVIATURA" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_OCACIONAL">Es ocasional</label>
                </div>
                <div class="col" style="display: flex;align-items: center;">
                    <div class="custom-control custom-switch">
                        @if(isset($MAT_OCACIONAL))
                        <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL" checked="{{$MAT_OCACIONAL}}">
                        @else  
                        <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL" >
                        @endif
                        <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('materia')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection