@extends('layouts.plantilla')
@section('contenido')
    <div class="parallax-container valign-wrapper">
        <img src="{{ asset('img/Ventanas/1.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
            alt="Unsplashed background img 1" />
    </div>
    <div class="container ">
        <div class="section">
            <h5 id="no-seleccionable" class="center grey-text">⭐ Productos</h5>
            <h4 class="center blue-text"><strong>Estamos Orgullosos De Nuestro Catálogo De Productos</strong></h4>


            <!--   Icon Section primera 3 cards  -->
            <div class="row ">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Redonda/1.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Gradas de 20cm</strong></p>
                                <a class="btn waves-effect blue white-text" href="gradas20">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Redonda/2.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Gradas Redonda</strong></p>
                                <a class="btn waves-effect blue white-text" href="gradasredonda">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Espina/6.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Gradas Espina</strong></p>
                                <a class="btn waves-effect blue white-text" href="espina">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--   Icon Section segunda 3 cards  -->

            <div class="row ">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Tapada/2.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Gradas Tapada</strong></p>
                                <a class="btn waves-effect blue white-text" href="tapada">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Cuadradas/4.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Gradas Cuadrada</strong></p>
                                <a class="btn waves-effect blue white-text" href="gradascuadradas">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Grada_metalica/4.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Gradas Metalicas</strong></p>
                                <a class="btn waves-effect blue white-text" href="gradasmetalicas">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Icon Section tercera 3 cards -->

            <div class="row ">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/arquitectura_industrial/1.jpg') }}">
                            <span class="card-title"></span>

                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Cerrajeria</strong></p>
                                <a class="btn waves-effect blue white-text" href="arquitectura">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Puertas/1.jpg') }}">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Puertas Metalicas</strong></p>
                                <a class="btn waves-effect blue white-text" href="puertasmetalicas">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" src="{{ asset('img/Ventanas/3.jpg') }}">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-content">
                            <div class="center">
                                <p><strong>Ventanas Metalicas</strong></p>
                                <a class="btn waves-effect blue white-text" href="ventanasmetalicas">VER CATALOGO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container valign-wrapper">
        <img src="{{ asset('img/Ventanas/9.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
            alt="Unsplashed background img 1" />
    </div>
    <style>
        #card{
    height: 350px;
}
    </style>
@endsection
