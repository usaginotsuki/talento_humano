@extends('app')
@section('css')
  <link href="{{ URL::asset('css/button.css') }}" rel='stylesheet' type='text/css' />

  <link href="{{ URL::asset('assets/font/font-awesome.min.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ URL::asset('assets/font/font.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' media="screen"/>
  <link href="{{ URL::asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' media="screen"/>
  <link href="{{ URL::asset('assets/css/responsive.css') }}" rel='stylesheet' type='text/css' media="screen"/>
  <link href="{{ URL::asset('assets/css/jquery.bxslider.css') }}" rel='stylesheet' type='text/css' media="screen"/>
  <style type="text/css">
    img.noticia{
    width: 150px; height: 175px;
    }
    img.slider{
    width: 1000px; height: 350px;
    }
    }
  </style>
@endsection
@section('content')
<div class="container container-main bg-white">
    <div class="center">
        <div class="slider_area">
            <div class="slider">
                <ul class="bxslider">
                    <li><img class="slider" src="{{URL::asset('images/principal/espe.png')}}"  title="Sistema De Control De Laboratorios" /></li>
                    <li><img class="slider" src="{{URL::asset('images/principal/laboratorio.jpg')}}"  title="Sistema De Control De Laboratorios" /></li>
                    <li><img class="slider" src="{{URL::asset('images/principal/laboratorio_petroquimica.jpg')}}"  title="Sistema De Control De Laboratorios" /></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container container-main bg-white">
    <div class="content_area">
        <div class="main_content floatleft">
            <div class="left_coloum floatleft">
                <div class="single_left_coloum_wrapper">
                    <h2 class="title">Noticias</h2>
                    <a class="more" href="#">mas</a>
                    @forelse($noticias as $noticia)
                    <div class="single_left_coloum floatleft">
                        <img class="noticia" src="{{$noticia -> NOT_IMAGEN}}" width="150" height="100" />
                        <h3>{{$noticia -> NOT_TITULO}}</h3>
                        <p>{{$noticia -> NOT_DESCRIPCION}}</p>
                        <a class="readmore" href="{{url('/noticiadetail/'.$noticia->NOT_CODIGO.'')}}">leer mas</a>
                    </div>    
                    @empty

                    @endforelse  
                </div>
            </div>
            <div class="right_coloum floatright">
                <div class="single_right_coloum">
                    <h2 class="title">Objetos Perdidos</h2>
                    @forelse($objetos as $objeto) 
                        <div class="single_cat_right_content editorial"> 
                            <img class="noticia" src="{{$objeto -> OBR_IMAGEN}}"  />
                            <a class="readmore" href="{{url('/objetodetail/'.$noticia->NOT_CODIGO.'')}}"><h3>{{$objeto -> OBR_NOMBRE}}</h3></a>
                            
                        </div> 
                    @empty

                    @endforelse
                </div>
            </div>
        </div>
        <div class="sidebar floatright">
            <div class="single_sidebar">
                <center>
                    <a href="{{url('/guias/login')}}" aling="left"><img src="{{URL::asset('images/principal/icono_guia.png')}}"> </a>
                </center>
            </div>
        </div>
    </div>
</div>


@endsection
@section('js')
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/jquery.bxslider.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/js/selectnav.min.js') }}"></script>
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
@endsection

