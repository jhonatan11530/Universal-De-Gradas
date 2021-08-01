@extends('layouts.plantilla')
@section('contenido')
    <img src="{{ asset('img/Antejardines/2.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
        alt="Unsplashed background img 1" />
    <div class="container ">
        <div class="section">
            <h5 id="no-seleccionable" class="center grey-text">⭐ Servicios</h5>
            <h4 class="center blue-text"><strong>Nuestro Servicios</strong></h4>
            <!--   Icon Section   -->
            <div class="row ">
                <div class="col s12 m4">
                    <div class="icon-block z-depth-3 white" style="height: 360px;">
                        <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/tubos.png') }}">
                        </h2>
                        <h5 class="center">Curvado De Tubos</h5>
                        <p class="black-text border-darken-4">Servicio de Curvado para pasamanos. Balcones. Estructura para
                            techos en
                            tubería coll Roll, aguas negras y galvanizados en calibres 18 y 16 tubos cuadros, rectangulares
                            y redondos.
                        </p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block z-depth-3 white" style="height: 360px;">
                        <h2 class="center blue-text lighten-2"><img height="80%"
                                src="{{ asset('LOGOS/configuraciones.png') }}"></h2>
                        <h5 class="center">Entorche De Varillas</h5>
                        <p class="black-text border-darken-4 ">Servicio de corte y entorche de varillas cuadradas de 11 mm
                            hasta
                            varillas de 5/8 desde 80 cmt hasta 6 metros en va.</p>

                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block z-depth-3 white" style="height: 360px;">
                        <h2 class="center blue-text lighten-2"><img height="80%"
                                src="{{ asset('LOGOS/mantenimiento.png') }}"></h2>
                        <h5 class="center">Mantenimiento De Gradas</h5>
                        <p class="black-text border-darken-4">Servicio completo reparación y mantenimientos de gradas
                            prefabricadas en
                            caracol, espinas y mixtas, sus gradas quedarán como nuevas.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <img src="{{ asset('img/Espina/6.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
            alt="Unsplashed background img 1" />
    </div>
@endsection
