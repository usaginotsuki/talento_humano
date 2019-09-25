@extends('layouts.principal')

@section('periodo')

<div class="container">
    <h2>Periodos</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ESTADO</th>
                <th scope="col">HORAS ATENCION</th>
                <th scope="col">FECHA INICIO</th>
                <th scope="col">FECHA FIN</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        @foreach ($periodos as $per)
        <tbody>
            <td>{{$per -> PER_CODIGO}}</td>
            <td>{{$per -> PER_NOMBRE}}</td>
            <td>{{$per -> PER_ESTADO}}</td>
            <td>{{$per -> PER_HORAS_ATENCION}}</td>
            <td>{{$per -> PER_FECHA_INICIO}}</td>
            <td>{{$per -> PER_FECHA_FIN}}</td>
        </tbody>
        @endforeach
    </table>
</div>

@stop