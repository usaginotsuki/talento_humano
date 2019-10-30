@extends('app')
@section('content')

<div class="container">
    <h2>Campus</h2>
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
            <a href="{{url('campus/create')}}" class="btn btn-primary mb-2">Nuevo</a>
        </div>
        <div class="col"></div>
        <div class="col">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <span class="oi oi-magnifying-glass"></span>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        @foreach ($campus as $cam)
        <tbody>
            <td scope="row">{{$cam -> CAM_CODIGO}}</td>
            <td scope="row">{{$cam -> CAM_NOMBRE}}</td>
            <td>
                <form action="{{url('/campus/'.$cam->CAM_CODIGO.'/destroy')}}" method="POST" class="float-right">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger mb-2"><span class="oi oi-trash"></span></button>
                </form>
                <a href="{{url('campus/'.$cam->CAM_CODIGO.'/edit')}}" class="btn btn-primary mb-2 float-right"><span class="oi oi-pencil"></span></a>
                &nbsp;
            </td>
        </tbody>
        @endforeach   
</table>
</div>
@endsection
