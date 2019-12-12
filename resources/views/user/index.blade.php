@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Usuarios'))

<div class="container-fluid">
    
    <div class="row">
        <div class="col">
            <a href="{{url('user/create')}}" class="btn btn-success mb-2">Nuevo</a>
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
                <th scope="col">EMAIL</th>
                <th scope="col">ROLE</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
            <td scope="row">{{$user->id}}</td>
                <td scope="row">{{$user->name}}</td>
                <td scope="row">{{$user->email}}</td>
                <td scope="row">{{$user->getRole()->name}}</td>
                <td>
                    
                </td>
            </tr>
        @endforeach   
        </tbody>
    </table>
</div>
@endsection