@extends('app')
@section('content')


<div class="container container-main bg-white">
	<a href="{{url('/guias/login')}}" ><img src="{{URL::asset('images/principal/icono_guia.png')}}"> </a>
    <img src="{{URL::asset('images/principal/espe.png')}}" >
    <table class="table table-hover table-bordereds" >
        <thead>
            <tr>
                <th scope="col">Objetos Perdidos</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($objeto as $obj)
            <tr>
                
                <td scope="row">{{$obj -> OBR_NOMBRE}}<br><img src="{{$obj -> OBR_IMAGEN}}" width="100" height="100"/></td>
            </tr>
            
        @endforeach 
        </tbody>
    </table>
</div>


<!--
<div class="wrapper">
    <ul id="sb-slider" class="sb-slider">
        @forelse($objeto as $obj)
            <li>
                <a href="#" target="_blank"><img src="{{$obj -> OBR_IMAGEN}}" alt="image1"/></a>
                <div class="sb-description">
                    <h3>{{$obj -> OBR_NOMBRE}}</h3>
                </div>
            </li>
        @empty
        @endforelse
    </ul>
    <div id="shadow" class="shadow"></div>

    <div id="nav-arrows" class="nav-arrows">
        <a href="#">Next</a>
        <a href="#">Previous</a>
    </div>

</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.slicebox.js') }} "></script>
  <script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
        -->
@endsection