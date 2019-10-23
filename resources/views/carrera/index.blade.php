@extends('app')
@section('content')

<div class="jumbotron">
    <h2>Carreras</h2>
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
            <a href="{{url('carrera/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <span class="counter pull-right"></span>
    <table id="ListTable" class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ABREVIATURA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($carreras as $car)
            <tr>
                <td scope="row">{{$car -> CAR_CODIGO}}</td>
                <td scope="row">{{$car -> CAR_NOMBRE}}</td>
                <td scope="row">{{$car -> CAR_ABREVIATURA}}</td>
                <td>
                    <form action="{{url('/carrera/'.$car->CAR_CODIGO.'/destroy')}}" method="POST" class="float-right">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                    </form>
                    <a href="{{url('carrera/'.$car->CAR_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                    &nbsp;
                </td>
            </tr>
        @endforeach   
        </tbody>
    </table>
</div>
@endsection