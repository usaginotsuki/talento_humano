<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF=8">
  <title>SG-LAB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Octavo Nivel 'B'">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
  <link href="{{ URL::asset('css/index.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ URL::asset('css/table.css') }}" rel='stylesheet' type='text/css' />
</head>
<body>
  <header>
    <div class="header-img"> 
      <ul class="nav topnav float-right">
		@if (Auth::guest())
			<a type="button" class="btn btn-dark" href="{{url('/')}}">Inicio</a>
			<a type="button" class="btn btn-dark" href="{{url('/auth/login')}}">Entrar</a>
		@else
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="/auth/logout">Cerrar Sesión</a></li>
				</ul>
			</li>
		@endif
      </ul>
	</div>
  </header>
   
  @yield('content')

  <footer class="footer footer-color footer-display">
    <div class="container">
      <p>Copyright &copy; 2019 TIC's ESPE-L</p>
      <p>Powered by <a href="https://laravel.com/">Laravel Framework</a></p>
    </div>
  </footer>

  <!-- <span class="oi oi-icon-name" title="icon name" aria-hidden="true"></span> -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/table.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/ListTable.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/TableInstitucion.js') }}"></script>

  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/ListTable.js') }}"></script>

</body>

