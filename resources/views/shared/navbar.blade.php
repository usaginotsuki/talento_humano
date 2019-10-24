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
        <a class="dropdown-item" href="{{url('reporte/hojacontrol')}}">Hoja de Control</a>
        <a class="dropdown-item" href="{{url('reporte/materia/carrera')}}">Materia por Carrera</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/eventos')}}">Eventos ocasionales</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('periodo')}}">Periodo</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('carrera')}}">Carrera</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('horario')}}">Horario</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('docente')}}">Docente</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('empresa')}}">Empresa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('institucion')}}">Institucion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link  text-white" href="{{url('control')}}">Control</a>
    </li>
  </ul>
</nav>
