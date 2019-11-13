<!-- 
    Sistema de Gestion de Laboratorios - ESPE

    Author: Antony Andrade - Jonel Lopez
    Revisado por: Andrade - Jonel Lopez
-->

@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Parámetro'))

<div class="container-fluid">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
    @endif
    <form action="{{url('/parametro/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="PAR_CODIGO" value="{{ $parametro->PAR_CODIGO }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="EMP_CODIGO">Empresa</label>
                    <select class="form-control" id="EMP_CODIGO" name="EMP_CODIGO">
                    @foreach ($empresas as $emp)
                        @if($emp->EMP_CODIGO == $parametro->EMP_CODIGO)
                        <option value="{{$emp->EMP_CODIGO}}" selected="{{$emp->EMP_CODIGO}}">{{$emp->EMP_NOMBRE}}</option>
                        @else
                        <option value="{{$emp->EMP_CODIGO}}"  >{{$emp->EMP_NOMBRE}}</option>
                        @endif
                    @endforeach
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PAR_TODOS">Todos</label>
                    <input type="text" class="form-control" id="PAR_TODOS" name="PAR_TODOS" value="{{ $parametro->PAR_TODOS }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PAR_SINO">Si | No</label>
                    <select name="PAR_SINO" id="PAR_SINO" class="form-control">
                        @if ($parametro->PAR_SINO =='0')
                        <option>SI</option>
                        <option selected>NO</option>
                        @else
                        <option selected>SI</option>
                        <option>NO</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PAR_DESTINO">Destino</label>
                    <input type="text" class="form-control" id="PAR_DESTINO" name="PAR_DESTINO" value="{{ $parametro->PAR_DESTINO }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CODIGO">Docente</label>
                    <input type="text" class="form-control" id="DOC_CODIGO" name="DOC_CODIGO" value="{{ $parametro->DOC_CODIGO }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="DOC_MIESPE">Usuario</label>
                    <input type="text" class="form-control" id="DOC_MIESPE" name="DOC_MIESPE" value="{{ $parametro->DOC_MIESPE }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="DOC_CLAVE">Clave</label>
                    <input type="text" class="form-control" id="DOC_CLAVE" name="DOC_CLAVE" value="{{ $parametro->DOC_CLAVE }}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="LAB_CODIGO">Laboratorio</label>
                    <input type="text" class="form-control" id="LAB_CODIGO" name="LAB_CODIGO" value="{{ $parametro->LAB_CODIGO }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="CAR_CODIGO">Carrera</label>
                    <input type="text" class="form-control" id="CAR_CODIGO" name="CAR_CODIGO" value="{{ $parametro->CAR_CODIGO }}">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PER_CODIGO">Periodo</label>
                    <input type="text" class="form-control" id="PER_CODIGO" name="PER_CODIGO" value="{{ $parametro->PER_CODIGO }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="MAT_CODIGO">Materia</label>
                    <input type="text" class="form-control" id="MAT_CODIGO" name="MAT_CODIGO" value="{{ $parametro->MAT_CODIGO }}">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PAR_OBSERVACION">Observaciones</label>
                    <input type="text" class="form-control" id="PAR_OBSERVACION" name="PAR_OBSERVACION" value="{{ $parametro->PAR_OBSERVACION }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="CON_CODIGO">Control</label>
                    <input type="text" class="form-control" id="CON_CODIGO" name="CON_CODIGO" value="{{ $parametro->CON_CODIGO }}">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="PAR_FECHA_INI">Fecha Inicio</label>
                    <input type="date" class="form-control" id="PAR_FECHA_INI" name="PAR_FECHA_INI" value="{{ $parametro->PAR_FECHA_INI }}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="PAR_FECHA_FIN">Fecha Final</label>
                    <input type="date" class="form-control" id="PAR_FECHA_FIN" name="PAR_FECHA_FIN" value="{{ $parametro->PAR_FECHA_FIN }}">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('parametro')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection