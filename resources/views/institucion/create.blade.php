@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Crear Institución'))

<div class="container-fluid">
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatórios</h5></p>
    <form action="{{url('institucion/store')}}"  method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row"> 
            <div class="col">
                <div class="form-group">
                    <label for="INS_NOMBRE">Nombre Institución<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="INS_NOMBRE" required placeholder="Ingrese el nombre de una institución" required>
                </div>
            </div>
        
            <div class="col">
                <div class="form-group">
                <label for="INS_FIRMA_DIRECTOR">Firma Director<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="INS_FIRMA_DIRECTOR" placeholder="Ingrese la firma de un director" required >
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="INS_PIE_DIRECTOR">Pie Director<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="INS_PIE_DIRECTOR" placeholder="Ingrese un pie de director" required>
                </div>
            </div>
        
            <div class="col">
                <div class="form-group">
                    <label for="INS_PIE_DIRECTOR2">Pie Director Dos<span style="color:#FF0000";>*</span></label>
                    <input type="text" class="form-control"  name="INS_PIE_DIRECTOR2" placeholder="Ingrese un pie de director" required>
                </div>
            </div>
        </div>   
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="INS_AUX">Auxiliar<span style="color:#FF0000";>*</span></label>
                    <input type="text"  class="form-control" name="INS_AUX" placeholder="Ingrese un axiliar" requireds>
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('institucion')}}" class="btn btn-danger mb-2">Cancelar</a> 
    </form>
</div>

@endsection