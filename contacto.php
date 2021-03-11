<?php
        include "bases/tops.php";
        ?>

 <div class="row">
        <br>
        
        <div class="col s5 ">
            <div class="col s12 center">
                <div class="numerico">
                <h5 class="blue-text text-lighten-1"><strong>Contáctenos.</strong></h5>
                <br>
                <i class="material-icons">phone</i><br>
                <a href="tel:+5726636116" >+57 (2) 663 6116</a><br><br>

                <i class="material-icons">phone</i><br>
                <a href="tel:+5726636116">+57 (2) 663 6116</a><br><br>

                <i class="material-icons">phone</i><br>
                <a href="tel:+573182702331">318 270 2331</a><br><br>
               
                <i class="material-icons">mail</i><br>
                <a href="mailto:ventas@universaldegradas.com">ventas@universaldegradas.com</a>
               
                </div>
            </div>
       
                    
            
            <div class="col s12 center">
                <div class="maps">
                <h5 class="blue-text text-lighten-1"><strong>Nuestra Ubicacion.</h5></strong><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7846798359005!2d-76.51307568585443!3d3.4026319524924418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a12d1fd53e79%3A0xcc3cd9891a867fc6!2sCl.%2047%20%2345-17%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1579796512643!5m2!1ses!2sco"
                        width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
            </div><br>
            <div class="contac">
            <div class="col s12 center">
                        
                <h5 class="blue-text text-lighten-1"><strong>Nuestros horario de Atención.</h5></strong>

                    <p>Lunes a viernes de<b> 08:00 a.m.</b> a <b>06:00 p.m.</b><br> Sábados de <b>08:00 a.m.</b> a <b>01:00 p.m.</b></p>
                    </h6>
                    </div>
                    </div>
        </div>
        
        <div class="formulario"> 
        <div class="col s12 ">
                 <center>
                  <h5 class="blue-text text-lighten-1"><strong >Envianos un Mensaje.</strong></h5>
                    </center>
                    <form class="col s12  z-depth-3" action="Validate.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                        <input  id="first_name" name="nombre" type="text" class="validate" required>
                        <label for="first_name">Nombre</label>
                        </div>

                    </div>
       
                    <div class="row">
                        <div class="input-field col s12">
                        <input  id="last_name" name="apellido" type="text" class="validate" required>
                        <label for="last_name">Apellido</label>
                        </div>

                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12">
                        <input id="tel" name="Telefono" type="tel" class="validate" required>
                        <label for="tel">Telefono</label>
                        </div>
                    </div>

                     <div class="row">
                        <div class="input-field col s12">
                        <input id="email" name="correo" type="email" class="validate" required>
                        <label for="email">Correo Electronico</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                        <textarea id="textarea2" name="mensaje" class="materialize-textarea" data-length="300" required></textarea>
                        <label for="textarea2">Mensaje</label>
                        <span class="helper-text" data-error="usted supero el limite de 300 caracteres" data-success="mensaje valido">escriba su mensaje</span>
                        </div>
                    </div>
                    
                    <center>
                    <div class="g-recaptcha" data-sitekey="6LeDp_8UAAAAALW5e6wCAqX-xiMYgu0WeIb4wanc"></div>
                    <button class="btn waves-effect waves-light" type="submit">Enviar<i class="material-icons right">send</i></button>
  
                    </center>
                        <br>
                    </form>
         
       </div>
        </div> 
     </div>

 </div>
 <script>
    $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
        
</script>

    <?php
        include "bases/bots.php";
        ?>