@extends('app')
@section('content')    
<div class="jumbotron">
    <h2>CREAR GUIA</h2>

    
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3">
                <br>
                    <center><h4>Crear una Guia Vacia</h4></center>
                <br>
                <button href="{{url('guia/controlGuiaLaboratoriocreate')}}" class="btn btn-primary"><span class="oi oi-clipboard"></span>Crear</button>
            </div>
        </div>
        <div class="col">
            <form action="{{url('guia/createGuiaSeleccion')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card border-primary mb-3">
                    <div class="card-body text-primary">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Seleccione un Periodo:</label>
                            <div class="col-sm-8">
                                <select class="form-control"  id="periodo" name="periodo" data-live-search="true" data-width="100%" required>
                                    <option value="0">------Seleccione------</option>>
                                    @foreach ($periodos as $periodo)
                                    <option value="{{ $periodo->PER_CODIGO }}">{{ $periodo->PER_NOMBRE }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Seleccione una Materia:</label>
                            <div class="col-sm-8">
                                <select  class="form-control" name="materiaCombo" id="materiaCombo" required>
                                    <option value="0">------Seleccione------</option>>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Seleccione una Guia:</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="guiaCombo"  id="guiaCombo" required>
                                    <option value="0">------Seleccione------</option>>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button type="submit" id="btn_cGuia"class="btn btn-primary" disabled><span class="oi oi-clipboard"></span>Crear Guia desde seleccion</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <br> 
</div>

@endsection
