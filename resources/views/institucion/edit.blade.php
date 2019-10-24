@extends('app')
@section('content')
<div class="container">
    <h2>Actualizar Institución</h2>
    <form  action="{{url('institucion/update')}}"  method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="INS_CODIGO" value="{{ $institucion->INS_CODIGO }}">
        <div class="row"> 
            <div class="col">
                <div class="form-group">
                    <label for="INS_NOMBRE">Nombre Institucion</label>
                    <input type="text" class="form-control"  name="INS_NOMBRE" value="{{$institucion->INS_NOMBRE}}" required>
                </div>
            </div>
                
            <div class="col">
                <div class="form-group">
                    <label for="INS_FIRMA_DIRECTOR">Firma Director</label>
                    <input type="text" class="form-control"  name="INS_FIRMA_DIRECTOR" value="{{$institucion->INS_FIRMA_DIRECTOR}}" required >
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="INS_PIE_DIRECTOR">Pie Director</label>
                    <input type="text" class="form-control"  name="INS_PIE_DIRECTOR" value="{{$institucion->INS_PIE_DIRECTOR}}" required>
                </div>
            </div>
                
            <div class="col">
                <div class="form-group">
                    <label for="INS_PIE_DIRECTOR2">Pie Director</label>
                    <input type="text" class="form-control"  name="INS_PIE_DIRECTOR2" value="{{$institucion->INS_PIE_DIRECTOR2}}" required>
                </div>
            </div>
        </div>   
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="INS_AUX">Auxiliar</label>
                    <input type="text"  class="form-control" name="INS_AUX" value="{{$institucion->INS_AUX}}" required>
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
            <a href="{{url('institucion')}}" class="btn btn-danger mb-2">Cancelar</a> 
    </form>
</div> 
@endsection