<!--
 Sistema de Gestion de Laboratorios - ESPE
 
 Author: Jerson Morocho
 Revisado por: DevOps
 -->

<nav class="navbar navbar-expand-lg navbar-dark nav-color">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Proceso
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('docente')}}">Docente</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('periodo')}}">Periodo</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('materia')}}">Materia</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('horario')}}">Registrar Horario</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{url('ocasionales')}}">Evento Ocasional</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('control/consola')}}">Control Laboratorio</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('control')}}">Control</a>
        <div class="dropdown-divider"></div>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Reportes
      </a>
     <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('reporte/horario/sala')}}">Horarios de Sala</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/horario/docente')}}">Horario por Docente</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/hoja/control')}}">Hoja de Control</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/materia/carrera')}}">Materia por Carrera</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/ocasionales')}}">Eventos ocasionales</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/guia/carrera')}}">Guias por Carrera</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{url('reporte/guia/docente')}}">Uso con Guias Entregadas</a>
        <div class="dropdown-divider"></div>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Estadisticas
      </a>
     <div class="dropdown-menu">
        <a class="dropdown-item" href="#">.....</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">........</a>
        <div class="dropdown-divider"></div>
        
      </div>
    </li>
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        Institucion
      </a>
     <div class="dropdown-menu">
        <a class="dropdown-item" href="/hora">Hora</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/empresa">Empresa</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/institucion">Institución</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/laboratorio">Laboratorio</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/parametro">Parametro</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/carrera">Carrera</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/control">Control</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/">Guias</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/">Eventos ocasionales</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="/campus">Campus</a>
      </div>
    </li>
   
  </ul>
</nav>