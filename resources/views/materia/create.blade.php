@extends('app')
@section('content')
<div class="jumbotron">
    <p><h2>Crear Materia</h2></p>
</div>
<div class="container">
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
    <form action="{{url('/materia/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_CODIGO">Periodo <label style="color:#FF0000";>*</label></label>
                    <select type="input" class="form-control" id="PER_CODIGO" name="PER_CODIGO" placeholder="PERIODO" >
                        <option>SELECCIONE</option>
                        @if(isset($PER_CODIGO))
                            @foreach ($periodo as $per)
                                @if($per->PER_CODIGO==$PER_CODIGO)
                                    <option value="{{$per->PER_CODIGO}}" selected="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                                @else
                                    <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>      
                               @endif
                               @endforeach
                            </select> 
                        @else  
                            @foreach ($periodo as $per)
                                <option value="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                            @endforeach
                        @endif
                    </select> 
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CODIGO">Docente <label style="color:#FF0000";>*</label></label>
                    <select type="input" class="form-control" id="DOC_CODIGO" name="DOC_CODIGO" placeholder="DOCENTE" >
                        <option>SELECCIONE</option>
                        @if(isset($DOC_CODIGO))
                            @foreach ($docente as $doc)
                                @if($doc->DOC_CODIGO==$DOC_CODIGO)
                                      <option value="{{$doc->DOC_CODIGO}}" selected="{{$doc->DOC_CODIGO}}">{{$doc->DOC_NOMBRES}}</option>
                                @else
                                 <option value="{{$doc->DOC_CODIGO}}">{{$doc->DOC_NOMBRES}}</option>
                               @endif
                               @endforeach
                            </select> 
                        @else  
                            @foreach ($docente as $doc)
                                <option value="{{$doc->DOC_CODIGO}}">{{$doc->DOC_NOMBRES}}</option>
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
                    <select type="input" class="form-control" id="CAR_CODIGO" name="CAR_CODIGO" placeholder="CARRERA" >
                        <option>SELECCIONE</option>
                        @if(isset($CAR_CODIGO))
                            @foreach ($carrera as $car)
                                @if($car->CAR_CODIGO==$CAR_CODIGO)
                                      <option value="{{$car->CAR_CODIGO}}" selected="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
                                @else
                                 <option value="{{$car->CAR_CODIGO}}"  >{{$car->CAR_NOMBRE}}</option>
                               @endif
                               @endforeach
                            </select> 
                        @else  
                            @foreach ($carrera as $car)
                                <option value="{{$car->CAR_CODIGO}}">{{$car->CAR_NOMBRE}}</option>
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
                        <input type="input" class="form-control" id="MAT_CODIGO_BANNER" name="MAT_CODIGO_BANNER" placeholder="CODIGO BANNER" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NRC">NRC <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NRC))
                        <input type="input" class="form-control" id="MAT_NRC" name="MAT_NRC" value="{{$MAT_NRC}}" >
                    @else  
                        <input type="input" class="form-control" id="MAT_NRC" name="MAT_NRC" placeholder="NRC" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NIVEL">Nivel</label>
                    @if(isset($MAT_NIVEL))
                        <input type="input" class="form-control" id="MAT_NIVEL" name="MAT_NIVEL" value="{{$MAT_NIVEL}}">
                    @else  
                        <input type="input" class="form-control" id="MAT_NIVEL" name="MAT_NIVEL" placeholder="NIVEL" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NOMBRE">Nombre<label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NOMBRE))
                        <input type="input" class="form-control" id="MAT_NOMBRE" name="MAT_NOMBRE" value="{{$MAT_NOMBRE}}">
                    @else  
                        <input type="input" class="form-control" id="MAT_NOMBRE" name="MAT_NOMBRE" placeholder="NOMBRE DE LA MATERIA" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_CREDITOS">Créditos <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_CREDITOS))
                        <input type="input" class="form-control" id="MAT_CREDITOS" name="MAT_CREDITOS" value="{{$MAT_CREDITOS}}">    
                    @else  
                        <input type="input" class="form-control" id="MAT_CREDITOS" name="MAT_CREDITOS" placeholder="NUMERO DE CREDITOS" >
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="MAT_NUM_EST">Número de estudiantes <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_NUM_EST))
                        <input type="input" class="form-control" id="MAT_NUM_EST" name="MAT_NUM_EST" value="{{$MAT_NUM_EST}}">    
                    @else  
                        <input type="input" class="form-control" id="MAT_NUM_EST" name="MAT_NUM_EST" placeholder="NUMERO DE ESTUDIANTES" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_ABREVIATURA">Abreviatura <label style="color:#FF0000";>*</label></label>
                    @if(isset($MAT_ABREVIATURA))
                        <input type="input" class="form-control" id="MAT_ABREVIATURA" name="MAT_ABREVIATURA" value="{{$MAT_ABREVIATURA}}">  
                    @else  
                        <input type="input" class="form-control" id="MAT_ABREVIATURA" name="MAT_ABREVIATURA" placeholder="ABREVIATURA" >
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_OCACIONAL">Es ocasional</label>
                </div>
                @if(isset($MAT_OCACIONAL))
                    <div class="col" style="display: flex;align-items: center;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL" checked="{{$MAT_OCACIONAL}}">
                            <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                        </div>
                    </div>
                @else  
                    <div class="col" style="display: flex;align-items: center;">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="MAT_OCACIONAL" name="MAT_OCACIONAL" >
                            <label class="custom-control-label" for="MAT_OCACIONAL"></label>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div>
            <label></label>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('materia')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection