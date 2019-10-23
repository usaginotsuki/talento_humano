<nav class="navbar navbar-expand-lg navbar-dark nav-color">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Reportes
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('reporte/horario/sala')}}">Horario por Sala</a>
        <a class="dropdown-item" href="{{url('reporte/horario/docente')}}">Horario por Docente</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/hoja/control')}}">Hoja de Control</a>
        <a class="dropdown-item" href="{{url('reporte/materia/carrera')}}">Materia por Carrera</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/eventos')}}">Eventos ocasionales</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        CRUD revisados
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('periodo')}}">Periodo</a>
        <a class="dropdown-item" href="{{url('horario')}}">Horario</a>
        <a class="dropdown-item" href="{{url('carrera')}}">Carrera</a>
        <a class="dropdown-item" href="{{url('docente')}}">Docente</a>
        <a class="dropdown-item" href="{{url('institucion')}}">Institucion</a>
        <a class="dropdown-item" href="{{url('materia')}}">Materia</a>
        <a class="dropdown-item" href="{{url('empresa')}}">Empresa</a>
        <a class="dropdown-item" href="{{url('parametro')}}">Parametro</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        CRUDs que todavia no estan revisados
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('campus')}}">Campus</a>
        <a class="dropdown-item" href="{{url('control')}}">Control</a>
        <a class="dropdown-item" href="{{url('laboratorio')}}">Laboratorio</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/horario/docente')}}">Horario por Docente</a>
        <a class="dropdown-item" href="{{url('reporte/hoja/control')}}">Hoja de Control</a>
        <a class="dropdown-item" href="{{url('reporte/materia/carrera')}}">Materia por Carrera</a>
        <a class="dropdown-item" href="{{url('reporte/eventos')}}">Eventos ocasionales</a>
      </div>
    </li>
  </ul>
</nav>