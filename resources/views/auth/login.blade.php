@extends('app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <br>
                    <br>
                    <div style="text-align: center; color: #ED7624;">
                        <label>
                            <h2>ACCESO</h2>
                        </label>
                    </div>
                    <div >
                        <label>
                            <h6>&nbsp; &nbsp; Por favor llene el siguiente formulario con sus credenciales de acceso:</h6>
                        </label>
                    </div>
                    <div class="alert alert-success">Los campos con <label style="color: #ED7624">*</label> son obligatorios</div>
                   <div class="card-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/auth/login')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label for="email_address" class="col-lg-2 control-label text-md-left" ><h3 style="color: #ED7624">Usuario*</h3></label>
                                <div class="col-xs-4">
                                    <input type="text" size="30"  class="form-control"name="name" id="name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"  class="col-lg-2 control-label"><h3 style="color: #ED7624">Clave*</h3></label>
                                <div class="col-xs-4" >
                                    <input type="password" size="30" class="form-control" name="password" id="password" required>
                                </div>
                            </div>                    
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="margin-right: 15px;">Ingresar
                                </button>
                            </div>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection