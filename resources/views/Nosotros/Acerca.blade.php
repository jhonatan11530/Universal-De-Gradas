@extends('layouts.plantilla')
@section('contenido')
<div class="container ">
    <div class="section">
      <h5 id="no-seleccionable" class="center grey-text">⭐Quiénes Somos</h5>
      <h4 class="center blue-text"><strong>Somos Universal de gradas</strong></h4>
      <!--   Icon Section   -->
      <div class="row ">
        <div class="col s12 m4">
          <div class="icon-block z-depth-3 white" style="height: 360px;">
            <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/equipo.png') }}"></h2>
            <h5 class="center">Quiénes Somos</h5>
            <p class="black-text border-darken-4">Somos universal de gradas, empresa líder en la fabricación y ventas de gradas, cerrajería y prestación de servicios (curvados de tubos entroches de varillas y mantenimiento de gradas) en la ciudad de santiago de cali, con más de 20 años de experiencia en el mercado</p>
          </div>
        </div>
  
        <div class="col s12 m4">
          <div class="icon-block z-depth-3 white" style="height: 360px;">
            <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/objetivo.png') }}"></h2>
            <h5 class="center">Mision</h5>
            <p class="black-text border-darken-4 ">Satisfacer las necesidades de nuestros clientes con productos de alta calidad a través de un servicio eficiente y precios competitivos.</p>
  
          </div>
        </div>
  
        <div class="col s12 m4">
          <div class="icon-block z-depth-3 white" style="height: 360px;">
            <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/vision.png') }}"></h2>
            <h5 class="center">Vision</h5>
            <p class="black-text border-darken-4">Ofrecerles a nuestros clientes la atención generalizada en todo lo referente a gradas, balaustres, hierro y aluminio arquitectónico, capaces de satisfacer las necesidades actuales y futuras de nuestros clientes, respaldados con el más eficiente servicio y la mayor garantía del mercado.</p>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  
  <div class="parallax-container valign-wrapper">
    <section ng-controller="MyCtrl">
        <img src="{{ asset('img/Ventanas/1.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
            alt="Unsplashed background img 1" />
    </section>
  </div>
  
  <div class="container " id='habilidades'>
    <div class="section">
      <h5 id="no-seleccionable" class="center grey-text">⭐FUNDAMENTOS</h5>
      <h4 class="center blue-text"><strong>Nuestra Estrategia</strong></h4>
      <!--   Icon Section   -->
      <div class="row ">
        <div class="col s12 m4">
          <div class="icon-block z-depth-3 white" style="height: 300px;">
            <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/grua.png') }}"></h2>
            <h5 class="center">Soluciones innovadoras</h5>
            <p class="black-text border-darken-4">Las innovaciones y los experimentos en construcción son esenciales ya
              que permiten crear gradas y diseños exclusivos.</p>
          </div>
        </div>
  
        <div class="col s12 m4">
          <div class="icon-block z-depth-3 white" style="height: 300px;">
            <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/gancho.png') }}"></h2>
            <h5 class="center">Últimas Tecnologías</h5>
            <p class="black-text border-darken-4 ">Proporcionar a los clientes mejores servicios requiere la
              implementación de las últimas tecnologías, que integramos a las tradicionales.</p>
  
          </div>
        </div>
  
        <div class="col s12 m4">
          <div class="icon-block z-depth-3 white" style="height: 300px;">
            <h2 class="center blue-text lighten-2"><img height="80%" src="{{ asset('LOGOS/edificio.png') }}"></h2>
            <h5 class="center">Impresionantes soluciones de diseño</h5>
            <p class="black-text border-darken-4">Nuestros diseñadores son altamente educados, experimentados y están
              llenos de ideas para implementar en nuestro trabajo de construcción.</p>
          </div>
        </div>
      </div>
      <div class="section center">
        <a class="btn waves-effect blue white-text" href="/catalogo">Mira nuestro catalogo</a>
      </div>
    </div>
  </div>
  <div class="parallax-container valign-wrapper">
    <section ng-controller="MyCtrl">
        <img src="{{ asset('img/Redonda/1.jpg') }}" class="parallax" du-parallax y="background" style="width: 100%;"
            alt="Unsplashed background img 1" />
    </section>
  </div>
  @endsection