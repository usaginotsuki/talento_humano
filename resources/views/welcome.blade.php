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
    <img src="{{URL::asset('images/principal/espe.png')}}" >
</div>

<div class="container container-main bg-white">
    <div class="content_area">
        <div class="main_content floatleft">
            <div class="left_coloum floatleft">
                <div class="single_left_coloum_wrapper">
                    <h2 class="title">Noticias</h2>
                    @forelse($noticias as $noticia)
                    <div class="single_left_coloum floatleft">
                        <img class="noticia" src="{{$noticia -> NOT_IMAGEN}}"/>
                        <h3>{{$noticia -> NOT_TITULO}}</h3>
                        <p>{{$noticia -> NOT_DESCRIPCION}}</p>
                        
                        @if(Auth::check())
                            <a class="readmore" href="{{url('home/noticiadetail/'.$noticia->NOT_CODIGO.'')}}">leer mas</a>    
                        @else
                            <a class="readmore" href="{{url('/noticiadetail/'.$noticia->NOT_CODIGO.'')}}">leer mas</a>
                        @endif
                    </div>    
                    @empty

                    @endforelse  
                </div>
            </div>
        </div>
        
    </div>
    <div class="content_area">
        <div class="main_content floatright">
            <div class="left_coloum floatright">
                <div class="single_left_coloum_wrapper">
                    <h2 class="title">Objetos Recuperados En El Laboratorio</h2>
                    @forelse($objetos as $objeto)
                    <div class="single_left_coloum floatright">
                        <img class="noticia" src="{{$objeto ->  OBR_IMAGEN}}"/>
                        <h3>{{$objeto -> OBR_NOMBRE}}</h3>
                        <p>{{$objeto -> OBR_DESCRIPCION}}</p>
                        
                    </div>    
                    @empty

                    @endforelse  
                </div>
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

