@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Actualizar docente</h2>
</div>
<div class="container">
    <form action="{{url('/docente/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="DOC_CODIGO" value="{{ $docente->DOC_CODIGO }}">

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CEDULA">Cedula</label>
                    <input type="number" class="form-control" id="DOC_CEDULA" name="DOC_CEDULA" placeholder="Cedula del docente" value="{{ $docente->DOC_CEDULA }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_MIESPE">Mi Espe</label>
                    <input type="input" class="form-control" id="DOC_MIESPE" name="DOC_MIESPE" placeholder="Usuario mi espe del docente" value="{{ $docente->DOC_MIESPE }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="DOC_NOMBRES">Nombres</label>
                    <input type="text" class="form-control" id="DOC_NOMBRES" name="DOC_NOMBRES" placeholder="Nombres del docente" value="{{ $docente->DOC_NOMBRES }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_APELLIDOS">Apellidos</label>
                    <input type="text" class="form-control" id="DOC_APELLIDOS" name="DOC_APELLIDOS" placeholder="Apellidos del docente" value="{{ $docente->DOC_APELLIDOS }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CORREO">Correo</label>
                    <input type="email" class="form-control" id="DOC_CORREO" name="DOC_CORREO" placeholder="Correo del docente" value="{{ $docente->DOC_CORREO }}" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CLAVE">Clave</label>
                    <input type="password" class="form-control" id="DOC_CLAVE" name="DOC_CLAVE" placeholder="Clave del docente" value="{{ $docente->DOC_CLAVE }}" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="DOC_TITULO">Titulo</label>
                    <input type="input" class="form-control" id="DOC_TITULO" name="DOC_TITULO" min="0" max="15" value="{{ $docente->DOC_TITULO }}" required>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('docente')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection