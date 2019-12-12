@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Roles'))

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
    <div class="row">
        <div class="col">
            <a href="{{url('role/create')}}" class="btn btn-success mb-2">Nuevo</a>
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
                <th scope="col">OBSERVACIONES</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
            <tr>
            <td scope="row">{{$role->id}}</td>
                <td scope="row">{{$role->name}}</td>
                <td scope="row">{{$role->description}}</td>
                <td>
                    
                </td>
            </tr>
        @endforeach   
        </tbody>
    </table>
</div>
@endsection