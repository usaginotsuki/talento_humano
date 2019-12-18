@extends('app')

@section('content')
@include('shared.title', array('titulo' => 'Crear Usuario'))

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
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

					<form class="form-horizontal" role="form" method="POST" action="/user/postCreate">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						 <div class="col">
			                <div class="form-group">
			                    <label for="name">Rol <span style="color:#FF0000";>*</span></label>
			                    <select class="col-md-6 form-control" id="role" name="role" >
			                        @foreach ($role as $rols)
                        				<option value="{{$rols->id}}">{{$rols->name}}</option>
                       				@endforeach
			                    </select> 
			                </div>
			            </div> 
						<div class="col">
			                <div class="form-group">
			                    <label for="name">Empresa <span style="color:#FF0000";>*</span></label>
			                    <select class="col-md-6 form-control" id="empresa" name="empresa" >
			                        @foreach ($empresas as $empresa)
                        				<option value="{{$empresa->EMP_CODIGO}}">{{$empresa->EMP_NOMBRE}}</option>
                       				@endforeach
			                    </select> 
			                </div>
			            </div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password <span style="color:#FF0000";>*</span></label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>
						 <!-- Submit Button -->
						 <button type="submit" class="btn btn-primary mb-2">Crear</button>
       					 <a href="{{url('user')}}" class="btn btn-danger mb-2">Cancelar</a>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
