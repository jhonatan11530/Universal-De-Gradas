@extends('layouts.plantilla')
    @section('contenido')
    <section ng-controller="MyCtrl">
        <div class="parallax-container">
          <div class="section no-pad-bot">
            <div class="container ">
              <div class="row center">
                <h2 class="header center light-blue-text text-lighten-5 "><strong>EN EMPRESA LIDER </strong></h2>
                <h2 class="header center light-blue-text text-lighten-5 "><strong>OFRECIENDO A CLIENTES</strong></h2>
                <div class="rotatingText-content">
                  <h2 class="rotatingText-adjective light-blue-text text-lighten-5">CALIDAD</h2>
                  <h2 class="rotatingText-adjective light-blue-text text-lighten-5">CERRAJERIA</h2>
                  <h2 class="rotatingText-adjective light-blue-text text-lighten-5">PRECIOS</h2>
                </div>
      
              </div>
            </div>
          </div>
          <img src="{{ asset('LOGOS/1.png') }}" class="parallax" du-parallax y="background" style="width: 150%;"
            alt="Unsplashed background img 1" />
        </div>
      
      </section>
      <div class="container ">
        <div class="section">
      
          <!--   Icon Section   -->
          <div class="row ">
            <div class="col s11 m3">
              <div class="icon-block z-depth-3 blue" style="height: 300px;">
                <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/mantenimiento.png') }}"></h2>
                <h5 class="center">Resultados</h5>
      
                <p class="black-text">Satisfacer las necesidades de nuestros clientes con productos de alta calidad a través
                  de un
                  servicio eficiente y precios competitivos.</p>
              </div>
            </div>
      
            <div class="col s11 m3">
              <div class="icon-block z-depth-3 white" style="height: 300px;">
                <h2 class="center blue-text lighten-2"><img height="40%" src="{{ asset('LOGOS/material.png') }}"></h2>
                <h5 class="center">Material </h5>
      
                <p class="black-text">Usamos Materiales de Construccion de alta calidad,permitiendonos ofrecer calidad
                  garantizada.</p>
      
              </div>
            </div>
      
            <div class="col s12 m6">
      
              <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/nombrelogo.png') }}"></h2>
              <h5><strong>SOMOS UNA EMPRESA CON MAS DE 20 AÑOS DE EXPERIENCIA EN EL SECTOR DE LA CONSTRUCCION</strong></h5>
      
              <p class="light">Estamos ubicados en la ciudad de cali calle 47 N° 45-17.somos una empresa fabricante de gradas
                prefabricadas y cerrajería en general</p>
              <a class="btn  center blue white-text" routerLink="/contacto"><i
                  class="material-icons right">mail</i>Contactanos</a>
            </div>
          </div>
      
        </div>
      </div>
      <div class="container">
        <h5 id="no-seleccionable" class="center grey-text">⭐ Catalogo</h5>
        <div class="section center">
          <div class="row center">
            <div class="slider">
              <ul class="slides">
                <li>
                    <img src="{{ asset('img/Redonda/1.jpg') }}"> <!-- random image -->
                    <div class="caption center-align">
                      <h3 class="header center light-blue-text"><strong>GRADAS PREFABRICADAS</strong></h3>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('img/Espina/1.jpg') }}"> <!-- random image -->
                    <div class="caption center-align">
                      <h3 class="header center light-blue-text"><strong>PASAMANOS</strong></h3>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('img/arquitectura/9.jpg') }}"> <!-- random image -->
                    <div class="caption center-align">
                      <h3 class="header center light-blue-text"><strong>CUBIERTAS</strong></h3>
                    </div>
                </li>
                <li>
                    <img src="{{ asset('img/Antejardines/4.jpg') }}"> <!-- random image -->
                    <div class="caption center-align">
                      <h3 class="header center light-blue-text"><strong>CERRAJERIA EN GENERAL</strong></h3>
                    </div>
                </li>
              </ul>
            </div>
          </div>
      
          <a class="btn waves-effect blue white-text" routerLink="/catalogo">Mira nuestro catalogo</a>
        </div>
      
      </div>
      
      
      <section ng-controller="MyCtrl">
        <div class="parallax-container">
          <div class="container">
            <div class="row center">
              <h2 class="header center col s12 blue-text darken-3"><strong>Nos comprometemos.</strong></h2>
              <h4>
                <p class="center-align white-text">
                  En Universal De Gradas nos comprometemos a cumplir todas tus expectativas,
                  respaldados por nuestro profecionalismo y experiencia, llegaremos a satisfacer de manera responsable,
                  con
                  productos de gran calidad que garantiza nuestro trabajo y servicios.
                </p>
              </h4>
      
            </div>
          </div>
          <img src="{{ asset('LOGOS/2.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
            alt="Unsplashed background img 1" />
        </div>
      </section>
      
      <div class="container ">
        <div class="section">
          <h5 id="no-seleccionable" class="center grey-text">⭐ Servicios</h5>
          <h4 class="center blue-text"><strong>Nuestro Servicios</strong></h4>
          <!--   Icon Section   -->
          <div class="row ">
            <div class="col s12 m4">
              <div class="icon-block z-depth-3 white" style="height: 360px;">
                <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/tubos.png') }}"></h2>
                <h5 class="center">Curvado De Tubos</h5>
                <p class="black-text border-darken-4">Servicio de Curvado para pasamanos. Balcones. Estructura para techos en
                  tubería coll Roll, aguas negras y galvanizados en calibres 18 y 16 tubos cuadros, rectangulares y redondos.
                </p>
              </div>
            </div>
      
            <div class="col s12 m4">
              <div class="icon-block z-depth-3 white" style="height: 360px;">
                <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/configuraciones.png') }}"></h2>
                <h5 class="center">Entorche De Varillas</h5>
                <p class="black-text border-darken-4 ">Servicio de corte y entorche de varillas cuadradas de 11 mm hasta
                  varillas de 5/8 desde 80 cmt hasta 6 metros en va.</p>
      
              </div>
            </div>
      
            <div class="col s12 m4">
              <div class="icon-block z-depth-3 white" style="height: 360px;">
                <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/mantenimiento.png') }}"></h2>
                <h5 class="center">Mantenimiento De Gradas</h5>
                <p class="black-text border-darken-4">Servicio completo reparación y mantenimientos de gradas prefabricadas en
                  caracol, espinas y mixtas, sus gradas quedarán como nuevas.</p>
              </div>
            </div>
          </div>
      
        </div>
      </div>
    

      <div class="parallax-container valign-wrapper">
        <section ng-controller="MyCtrl">
          <img src="{{ asset('LOGOS/3.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
          alt="Unsplashed background img 1" />
        </section>
      </div>
      
    @endsection