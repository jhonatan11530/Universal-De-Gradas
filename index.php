    <?php
        include "bases/tops.php";
        ?>

<script>
    window.onload=miFuncion;
        function miFuncion() {
            document.getElementById('openModal').style.display = 'block';
        }
            
        function CloseModal() {
            document.getElementById('openModal').style.display = 'none';
        }
</script>

<!-- MODAL-->
<div id="openModal" class="modalDialog">
    <div> 
        <a href="#" title="Cerrar" class="close" onclick="CloseModal();">X</a>
        
        <a href="#"><img height="100%" width="100%" src="LOGOS/numero1.png"></a>
        </div>
</div>


<body onload="setTimeout(miFuncion, 1500);">

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container ">
                <br><br>
                <h1 class="header center light-blue-text text-lighten-5 "><strong>Universal De Gradas</strong></h1>
                <div class="row center">
                    <h5 class="header col s12 yellow-text darken-1"><strong>TODO EN GRADAS Y PASAMANOS
                        SERVICIOS DE CERRAJERÍA EN ACERO INOXIDABLE, HIERRO FORJADO PARA ANTEJARDINES.</strong> </h5>

 
                </div>
                
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="LOGOS/1.png" alt="Unsplashed background img 1"></div>
    </div>
  

    <div class="container ">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row ">
                <div class="col s12 m4">
                    <div class="icon-block z-depth-3 white">
                        <h2 class="center blue-text lighten-2"><i class="material-icons">assistant_photo</i></h2>
                        <h5 class="center">Misión</h5>

                        <p class="light">Satisfacer las necesidades de nuestros clientes con productos de alta calidad a través de un servicio eficiente y precios competitivos.</p>
                        <br><br><br><br>

                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block z-depth-3 white">
                        <h2 class="center blue-text lighten-2"><i class="material-icons">group</i></h2>
                        <h5 class="center">Quiénes somos</h5>

                        <p class="light ">Somos universal de gradas, empresa líder en la fabricación y ventas de gradas, cerrajería y prestación de servicios (curvados de tubos entroches de varillas y mantenimiento de gradas) en la ciudad de santiago de cali, con más
                            de 20 años de experiencia en el mercado.</p>

                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block z-depth-3 white">
                        <h2 class="center blue-text lighten-2"><i class="material-icons">remove_red_eye</i></h2>
                        <h5 class="center">Visión</h5>

                        <p class="light">Ofrecerles a nuestros clientes la atención generalizada en todo lo referente a gradas, balaustres, hierro y aluminio arquitectónico, capaces de satisfacer las necesidades actuales y futuras de nuestros clientes, respaldados con
                        el más eficiente servicio y la mayor garantía del mercado.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    
    <div class="container">
        <div class="section center" >

            <div class="row center" >

         
            <div class="carousel carousel-slider center z-depth-3" style="height:558px">
                    <div class="carousel-fixed-item ">

                    
                    </div>

                    <div class="carousel-item blue darken-4 white-text" href="#one!">
                        <h2>Gradas en granito</h2>
                        <img height="80%" width="80%" src="img/Redonda/1.jpg">
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>Gradas en hierro</h2>
                        <img height="80%" width="80%" src="img/Espina/1.jpg">
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2>Estructuras en hierro</h2>
                        <img height="80%" width="80%" src="img/arquitectura/9.jpg">
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2>Cerrajería</h2>
                        <img height="80%" width="80%" src="img/Antejardines/4.jpg">
                    </div>
                    
                </div>
                
                
            </div>
            <a class="btn waves-effect blue white-text" href="catalogo.php">Mira nuestro catalogo</a>   

         <div class="col s12 center ">
            <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="blue-text text-lighten-1 "> <strong>Nos comprometemos</strong></h4 class="blue-text text-lighten-1">
        
          <p class="center-align white">


            En Universal De Gradas nos comprometemos a cumplir todas tus expectativas, 
            respaldados por nuestro profecionalismo y experiencia, llegaremos a satisfacer de manera responsable, con
            productos de gran calidad que garantiza nuestro trabajo y servicios.
            <br>
        
            </p>
        
     
        </div>
 

            </div>

        </div>
    </div>

    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 yellow-text darken-1"><strong>SERVICIOS DE CURVADO DE TUBOS,
              ENTROCHES DE VARILAS Y MANTENIMIENTO DE GRADAS.</strong></h5>


                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/arquitectura industrial/1.jpg" alt="Unsplashed background img 2"></div>
    </div>

        <?php
        include "bases/bots.php";
        ?>
        