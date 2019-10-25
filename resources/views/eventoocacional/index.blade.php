 @extends('app')
@section('content')
<div class="jumbotron">
    <h2> Lista de Evento Ocacional</h2>
</div>
<div class="container">
    @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <a href="{{url('eventoocacional/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="row">ID</th>
                <th scope="row">SALA</th>
                <th scope="row">MATERIA</th>
                <th scope="row">DOCENTE</th>
                <th scope="row">DIA</th>
                <th scope="row">HORA ENTRADA</th>
                <th scope="row">HORA SALIDA </th>
                <th scope="row">NUMERO HORAS </th>
                <th scope="row">NOTA </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($eventoocacionales as $eve)
            <tr>
                <td scope="row">{{$eve -> CON_CODIGO}}</td>
                <td scope="row">{{$eve -> LAB_CODIGO}}</td>
                <td scope="row">{{$eve -> MAT_CODIGO}}</td>
                <td scope="row">{{$eve -> DOC_CODIGO}}</td>
                <td scope="row">{{$eve -> CON_DIA }}</td>
                <td scope="row">{{$eve -> CON_HORA_ENTRADA}}</td>
                <td scope="row">{{$eve -> CON_HORA_SALIDA}}</td>
                <td scope="row">{{$eve -> CON_NUMERO_HORAS}}</td>
                <td scope="row">{{$eve -> CON_NOTA}}</td>
            </tr>
        @endforeach   
        </tbody>
    </table>
</div>
@endsection
