@extends('app')
@section('content')

<div class="container">
    <h2 style="color:#FA6910">Crear Guia:</h2>
    <p><h6>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h6></p>
    <form class="form" id="form" action="{{url('/guias/store')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group row">
                <label for="GUI_FECHA"class="col-sm-2 col-form-label">Fecha<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-3">
                    @if (isset($guiass))
                    <input type="input" class="form-control" id="GUI_FECHA" name="GUI_FECHA" placeholder="Guia" value="{{ $guiass->GUI_FECHA }}" required>
                    @else
                    <input type="date" class="form-control" id="GUI_FECHA" name="GUI_FECHA"  required>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_TEMA"class="col-sm-2 col-form-label">Tema<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-6">
                    @if (isset($guiass))
                    <input type="input" class="form-control" id="GUI_TEMA" name="GUI_TEMA"  placeholder="Guia" value="{{ $guiass->GUI_TEMA }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_TEMA" name="GUI_TEMA"  required>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_INTRODUCCION"class="col-sm-2 col-form-label">Introduccion<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guiass))
                        <input type="input" class="form-control" id="GUI_INTRODUCCION" name="GUI_INTRODUCCION"  placeholder="Guia" value="{{ $guiass->GUI_INTRODUCCION }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_INTRODUCCION" name="GUI_INTRODUCCION"  required>
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_OBJETIVO"class="col-sm-2 col-form-label">Objetivos<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guiass))
                        <input type="input" class="form-control" id="GUI_OBJETIVO" name="GUI_OBJETIVO"  placeholder="Guia" value="{{ $guiass->GUI_OBJETIVO }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_OBJETIVO" name="GUI_OBJETIVO"  required>
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_EQUIPO_MATERIALES"class="col-sm-2 col-form-label">Equipos y Materiales<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guiass))
                        <input type="input" class="form-control" id="GUI_EQUIPO_MATERIALES" name="GUI_EQUIPO_MATERIALES"  placeholder="Guia" value="{{ $guiass->GUI_EQUIPO_MATERIALES }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_EQUIPO_MATERIALES" name="GUI_EQUIPO_MATERIALES"  required>
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_TRABAJO_PREPARATORIO"class="col-sm-2 col-form-label">Instrucciones<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guiass))
                        <input type="input" class="form-control" id="GUI_TRABAJO_PREPARATORIO" name="GUI_TRABAJO_PREPARATORIO" placeholder="Guia" value="{{ $guiass->GUI_TRABAJO_PREPARATORIO}}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_TRABAJO_PREPARATORIO" name="GUI_TRABAJO_PREPARATORIO"  required>
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_ACTIVIDADES"class="col-sm-2 col-form-label">Actividades por desarrollar<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guiass))
                        <input type="input" class="form-control" id="GUI_ACTIVIDADES" name="GUI_ACTIVIDADES"  placeholder="Guia" value="{{ $guiass->GUI_ACTIVIDADES }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_ACTIVIDADES" name="GUI_ACTIVIDADES"  required>
                    @endif
                   
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_RESULTADOS"class="col-sm-2 col-form-label">Resultados obtenidos<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guias))
                        <input type="input" class="form-control" id="GUI_RESULTADOS" name="GUI_RESULTADOS"  placeholder="Guia" value="{{ $guias->GUI_RESULTADOS }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_RESULTADOS" name="GUI_RESULTADOS"  required>
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_CONCLUSIONES"class="col-sm-2 col-form-label">Concluciones</label>
                <div class="col-sm-10">
                    @if (isset($guias))
                        <input type="input" class="form-control" id="GUI_CONCLUSIONES" name="GUI_CONCLUSIONES" placeholder="Guia" value="{{ $guias->GUI_CONCLUSIONES }}">
                    @else
                        <input type="text" class="form-control" id="GUI_CONCLUSIONES" name="GUI_CONCLUSIONES" >
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_RECOMENDACIONES"class="col-sm-2 col-form-label">Recomendaciones</label>
                <div class="col-sm-10">
                    @if (isset($guias))
                        <input type="input" class="form-control" id="GUI_RECOMENDACIONES" name="GUI_RECOMENDACIONES" placeholder="Guia" value="{{ $guias->GUI_RECOMENDACIONES }}">
                    @else
                        <input type="text" class="form-control" id="GUI_RECOMENDACIONES" name="GUI_RECOMENDACIONES">
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_REFERENCIAS_BIBLIOGRAFICAS"class="col-sm-2 col-form-label">Referencias Bibliograficas </label>
                <div class="col-sm-10">
                    @if (isset($guias))
                        <input type="input" class="form-control" id="GUI_REFERENCIAS_BIBLIOGRAFICAS" name="GUI_REFERENCIAS_BIBLIOGRAFICAS" placeholder="Guia" value="{{ $guias->GUI_REFERENCIAS_BIBLIOGRAFICAS }}">
                    @else
                        <input type="text" class="form-control" id="GUI_REFERENCIAS_BIBLIOGRAFICAS" name="GUI_REFERENCIAS_BIBLIOGRAFICAS" >
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_COORDINADOR"class="col-sm-2 col-form-label">Coordinador Area<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guias))
                        <input type="input" class="form-control" id="GUI_COORDINADOR" name="GUI_COORDINADOR" placeholder="Guia" value="{{ $guias->GUI_COORDINADOR }}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_COORDINADOR" name="GUI_COORDINADOR" required>
                    @endif
                    
                </div>
            </div>
            <div class="form-group row">
                <label for="GUI_DURACION"class="col-sm-2 col-form-label">Duracion<span style="color:#FF0000";>*</span></label>
                <div class="col-sm-10">
                    @if (isset($guias))
                        <input type="input" class="form-control" id="GUI_DURACION" name="GUI_DURACION" placeholder="Guia" value="{{ $guias->GUI_DURACION}}" required>
                    @else
                        <input type="text" class="form-control" id="GUI_DURACION" name="GUI_DURACION"  require>
                    @endif
                    
                </div>
            </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Crear</button>
        <a href="{{url('guias/crearGuia')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection