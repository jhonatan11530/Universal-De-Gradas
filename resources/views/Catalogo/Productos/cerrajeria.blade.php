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
            <div class="row ">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/1.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/2.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/3.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
            <!--   Icon Section segunda 3 cards  -->
            <div class="row ">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/4.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/5.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/6.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Icon Section tercera 3 cards -->
            <div class="row ">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/7.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/8.jpg') }}">
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img id="card" class="materialboxed" src="{{ asset('img/arquitectura/9.jpg') }}">
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
@endsection
