@extends('app')
@section('content')   
<div class="jumbotron">
    <h2>Horario por salas</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{url('/reporte/horario/sala')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card border-primary mb-3">
                    <div class="card-header text-primary">Consultar</div>
                    <div class="card-body text-primary">
                        <div class="form-group mb-2">
                            <label for="inputFecha" class="col-sm-2 col-form-label">FECHA:</label>
                            <input type="text" class="form-control" name="CON_DIA" id="CON_DIA"  />
                        </div>
                        <button type="submit" class="btn btn-primary"><span class="oi oi-magnifying-glass"></span> Consultar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col">
            <div class="card border-info mb-3">
                <div class="card-header text-info">Opciones</div>
                <div class="card-body text-info">
                    <form>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h5 class="card-title">Incluir Horas Ocasionales</h5>
                        <div class="custom-control custom-radio">
                            @if (isset($horario))
                            <input type="radio" class="custom-control-input" id="colorFondo" name="opts" onChange="changeBackground()">
                            @else
                            <input disabled type="radio" class="custom-control-input" id="colorFondo" name="opts" onChange="changeBackground()">
                            @endif
                            <label class="custom-control-label" for="colorFondo">Fondo Gris</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            @if (isset($horario))
                            <input type="radio" class="custom-control-input" id="textoFondo" name="opts" onChange="changeText()">
                            @else
                            <input disabled type="radio" class="custom-control-input" id="textoFondo" name="opts" onChange="changeText()">
                            @endif
                            <label class="custom-control-label" for="textoFondo">Texto (O)</label>
                        </div>
                    </form>
                    @if (isset($horario))
                    <button onclick="exportHorarioSala()" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar a PDF</button>
                    @else
                    <button disabled onclick="exportHorarioSala()" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar a PDF</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <br>
    
</div>

@endsection