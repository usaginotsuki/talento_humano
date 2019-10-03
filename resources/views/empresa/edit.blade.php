
 


<!DOCTYPE html>
<html>
 <head>
    <title>Edit </title>
 </head>
@extends('app')
@section('content')
@include ('shared.navbar')
 <body >
        
        <div class="container">
         <h2>Editar Empresa</h2>
         <h3>CODIGO {{ $empresa->EMP_CODIGO }}: {{ $empresa->EMP_NOMBRE }}</h3>  
         <form  action="/empresa/update"  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="EMP_CODIGO" value="{{ $empresa->EMP_CODIGO }}">
            <div class="row"> 

                <div class="col">
                        <div class="form-group">
                        <label for="EMP_NOMBRE">Nombre Laboratorio General</label>
                                <input type="text" class="form-control"  name="EMP_NOMBRE" value="{{$empresa->EMP_NOMBRE}}" required >
                        </div>
                </div>
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_FIRMA_DEE"> Director de Departamento</label>
                                <input type="text" class="form-control"  name="EMP_FIRMA_DEE" value="{{$empresa->EMP_FIRMA_DEE}}" required >
                        </div>
                </div>
             
                
           </div>  
           <div class="row">
           <div class="col">
                        <div class="form-group">
                        <label for="EMP_PIE_DEE:">Cargo del Director Departamento</label>
                                <input type="text" class="form-control"  name="EMP_PIE_DEE"  value="{{$empresa->EMP_PIE_DEE}}" required >
                        </div>
                </div>
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_FIRMA_JEFE">Jefe del Laboratorio</label>
                                <input type="text" class="form-control"  name="EMP_FIRMA_JEFE" value="{{$empresa->EMP_FIRMA_JEFE}}"  required >
                        </div>
                </div>
           </div>   
           <div class="row">
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_PIE_JEFE">Cargo del Jefe de Laboratorio</label>
                                <input type="text"  class="form-control" name="EMP_PIE_JEFE" value="{{$empresa->EMP_PIE_JEFE}}" required >
                        </div>
                </div>
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_FIRMA_LAB"> Laboratorista</label>
                                <input type="text"  class="form-control"  name="EMP_FIRMA_LAB" value="{{$empresa->EMP_FIRMA_LAB}}" required >
                        </div>
                </div>
           </div>
           <div class="row">
                
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_PIE_LAB">Cargo del Laboratorista</label>
                                <input type="text"  class="form-control" name="EMP_PIE_LAB" value="{{$empresa->EMP_PIE_LAB}}" required  >
                        </div>
                </div>
             
                <div class="col" style="display: flex;align-items: center;">
                        <div class="custom-control custom-switch">
                        @if ($empresa->EMP_ESTADO !=1)
                        <input type="checkbox" class="custom-control-input" id="EMP_ESTADO" name="EMP_ESTADO">
                        @elseif ($empresa->EMP_ESTADO === 1)
                        <input type="checkbox" class="custom-control-input" id="EMP_ESTADO" name="EMP_ESTADO" checked>
                        @endif
                        <label class="custom-control-label" for="EMP_ESTADO">Estado</label>
                        </div>
                </div>
               
            </div>
            
            <div class="row">
                
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_IMAGEN_ENCABEZADO">Imagen Encabezado</label>
                                <input type="text"  class="form-control" name="EMP_IMAGEN_ENCABEZADO" value="{{$empresa->EMP_IMAGEN_ENCABEZADO}}" required  >
                               
                        </div>
                </div>
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_IMAGEN_ENCABEZADO2">Imagen Encabezado</label>
                                <input type="text"  class="form-control" name="EMP_IMAGEN_ENCABEZADO2" value="{{$empresa->EMP_IMAGEN_ENCABEZADO2}}" required  >
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_AUX1">Auxiliar</label>
                                <input type="text"  class="form-control" name="EMP_AUX1" value="{{$empresa->EMP_AUX1}}" required  >
                        </div>
                </div>
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_AUX2">Auxiliar 2</label>
                                <input type="text"  class="form-control" name="EMP_AUX2" value="{{$empresa->EMP_AUX2}}" required  >
                        </div>
                </div>
            </div>
            <div class="row">
            <div class="col">
                        <label for="EMP_RELACION_SUFICIENCIA">Relacion Suficiencia</label>
                        <input type="number"  class="form-control" name="EMP_RELACION_SUFICIENCIA" value="{{$empresa->EMP_RELACION_SUFICIENCIA}}" required  >
                </div>
                <div class="form-group">
                        <label for="INS_CODIGO">Instituto</label>
                        <select type="input" class="form-control" id="INS_CODIGO" name="INS_CODIGO"  >
                                @foreach ($instituciones as $institucion)
                                @if($institucion->INS_CODIGO==$empresa->INS_CODIGO)
                                        <option value="{{$institucion->INS_CODIGO}}" selected="{{$institucion->INS_CODIGO}}">{{$institucion->INS_NOMBRE}}</option>
                                        @else
                                        <option value="{{$institucion->INS_CODIGO}}"  >{{$institucion->INS_NOMBRE}}</option>
                                @endif
                                @endforeach
                        </select>
                </div>
            </div>

                <br>
                <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                 <a href="{{url('empresa')}}" class="btn btn-danger mb-2">Cancelar</a> 
             
        </form>
       </div> 
</body>
@endsection
</html>

