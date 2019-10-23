
@extends('app')
@section('content')
        
        <div class="container">
         <h2>Crear Empresa</h2>
         <form  action="/empresa/store"  method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row"> 
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_NOMBRE">Nombre Laboratorio General</label>
                                <input type="text" class="form-control"  name="EMP_NOMBRE" required >
                        </div>
                </div>
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_FIRMA_DEE"> Director de Departamento</label>
                                <input type="text" class="form-control"  name="EMP_FIRMA_DEE" required >
                        </div>
                </div>
             
                
           </div>  
           <div class="row">
           <div class="col">
                        <div class="form-group">
                        <label for="EMP_PIE_DEE:">Cargo del Director Departamento</label>
                                <input type="text" class="form-control"  name="EMP_PIE_DEE"  required >
                        </div>
                </div>
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_FIRMA_JEFE">Jefe del Laboratorio</label>
                                <input type="text" class="form-control"  name="EMP_FIRMA_JEFE"  required >
                        </div>
                </div>
           </div>   
           <div class="row">
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_PIE_JEFE">Cargo del Jefe de Laboratorio</label>
                                <input type="text"  class="form-control" name="EMP_PIE_JEFE" required >
                        </div>
                </div>
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_FIRMA_LAB"> Laboratorista</label>
                                <input type="text"  class="form-control"  name="EMP_FIRMA_LAB" required >
                        </div>
                </div>
           </div>
           <div class="row">
                
             
                <div class="col">
                        <div class="form-group">
                        <label for="EMP_PIE_LAB">Cargo del Laboratorista</label>
                                <input type="text"  class="form-control" name="EMP_PIE_LAB" required  >
                        </div>
                </div>
        
                <div class="col" style="display: flex;align-items: center;">
                        <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="EMP_ESTADO" name="EMP_ESTADO">
                                    <label class="custom-control-label" for="EMP_ESTADO">Estado</label>
                        </div>
                 </div>

                <div class="col">
                        <div class="form-group">
                        <label for="EMP_ESTADO">Estado del Laboratorio</label>
                        <select class="form-control" id="EMP_ESTADO" name="EMP_ESTADO" required>
                                <option>0</option>
                                <option>1</option>
                        </select>
                        </div>
                </div>

               
            </div>
            
            <div class="row">
                
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_IMAGEN_ENCABEZADO">Imagen Encabezado</label>
                                <input type="text"  class="form-control" name="EMP_IMAGEN_ENCABEZADO" required  >
                               
                        </div>
                </div>
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_IMAGEN_ENCABEZADO2">Imagen Encabezado</label>
                                <input type="text"  class="form-control" name="EMP_IMAGEN_ENCABEZADO2" required  >
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_AUX1">Auxiliar</label>
                                <input type="text"  class="form-control" name="EMP_AUX1" required  >
                        </div>
                </div>
                <div class="col">
                        <div class="form-group">
                                <label for="EMP_AUX2">Auxiliar 2</label>
                                <input type="text"  class="form-control" name="EMP_AUX2" required  >
                        </div>
                </div>
            </div>
            <div class="row">
            <div class="col">
                        <label for="EMP_RELACION_SUFICIENCIA">Relacion Suficiencia</label>

                        <input type="number"  class="form-control" name="EMP_RELACION_SUFICIENCIA" required  >
                </div>
                <div class="form-group">
                        <label for="INS_CODIGO">Institucion</label>
                        <select type="input" class="form-control" id="INS_CODIGO" name="INS_CODIGO" placeholder="Institucion"  required>
                                @foreach ($instituciones as $institucion)
                                        <option value="{{$institucion->INS_CODIGO}}">{{$institucion->INS_NOMBRE}}</option>
                                @endforeach
                         </select> 
                </div>
               

                        <select class="form-control" id="EMP_RELACION_SUFICIENCIA"   name="EMP_RELACION_SUFICIENCIA"  required>
                                <option>0</option>
                                <option>1</option>
                        </select>
                </div>
                <div class="form-group">
                        <label for="INS_CODIGO">Instituto</label>
                        <select class="form-control" id="INS_CODIGO" name="INS_CODIGO" required>
                                <option>1</option>
                                <option>2</option>
                        </select>
                </div>

            </div>

                <br>
                <button type="submit" class="btn btn-primary mb-2">Crear</button>
                 <a href="{{url('empresa')}}" class="btn btn-danger mb-2">Cancelar</a> 
             
        </form>
       </div> 
@endsection

