@extends('app')
@section('content')    
<div class="container">
    <h2>CREAR GUIA</h2>
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3">
                    <a href="{{url('guia/controlGuiaLaboratoriocreate')}}" class="btn btn-primary mb-2">Crear Guia Vacia</a>
            </div>
        </div>

        <div class="col">
            <form action="{{url('guia/createGuiaSeleccion')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="card border-primary mb-3">
                    
                    <div class="card-body text-primary">
                        <label>Seleccione un Periodo...</label>
                        <select  id="periodo" name="periodo" data-live-search="true" data-width="100%">
                            <option value="0">------Seleccione------</option>>
                            @foreach ($periodos as $periodo)
                            <option value="{{ $periodo->PER_CODIGO }}">{{ $periodo->PER_NOMBRE }}</option>
                            @endforeach
                        </select>
                        <div>
                            <label>Seleccione una Materia...</label>
                            <select  name="materiaCombo" id="materiaCombo" >
                            <option value="0">------Seleccione------</option>>

                           </select>
                        </div>
                        <div>
                            <label>Seleccione una Guia...</label>
                            <select  name="guiaCombo"  id="guiaCombo" >
                            <option value="0">---------------------------Seleccione---------------------------</option>>
                          
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"><span class="oi-clipboard"></span> Crear Guia desde seleccion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br> 
</div>

@endsection
