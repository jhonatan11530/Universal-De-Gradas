@extends('layouts.plantilla')
@section('contenido')
    
<div class="row">
    <br>
    <div class="col s5 ">
        <div class="col s12 center">
            <div class="numerico">
                <h5 class="blue-text text-lighten-1"><strong>Contáctenos.</strong></h5>
                <br>
                <i class="material-icons">phone</i><br>
                <a href="tel:+5726636116">+57 (2) 663 6116</a><br><br>

                <i class="material-icons">phone</i><br>
                <a href="tel:+573173685788">+57 (317) 368 57 88</a><br><br>

                <i class="material-icons">phone</i><br>
                <a href="tel:+573182702331">+57 (318) 270 2331</a><br><br>

                <i class="material-icons">mail</i><br>
                <a href="mailto:ventas@universaldegradas.com">ventas@universaldegradas.com</a>

            </div>
        </div>



        <div class="col s12 center">
            <div class="maps">
                <h5 class="blue-text text-lighten-1"><strong>Nuestra Ubicacion.</strong></h5>
                <p class="black-text center">Calle 47 Nº. 45 – 17, República de Israel – Cali, Valle del Cauca</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7846798359005!2d-76.51307568585443!3d3.4026319524924418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a12d1fd53e79%3A0xcc3cd9891a867fc6!2sCl.%2047%20%2345-17%2C%20Cali%2C%20Valle%20del%20Cauca!5e0!3m2!1ses!2sco!4v1579796512643!5m2!1ses!2sco"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        <div class="contac">
            <div class="col s12 center">

                <h5 class="blue-text text-lighten-1"><strong>Nuestros horario de Atención.</strong></h5>

                <p>Lunes a viernes de<b> 08:00 a.m.</b> a <b>06:00 p.m.</b><br> Sábados de <b>08:00 a.m.</b> a <b>01:00
                        p.m.</b></p>

            </div>
        </div>
    </div>


    <div class="formulario">
        <div class="col s12 ">
            <div class="center-align">
                <h5 class="blue-text text-lighten-1"><strong>Envianos un Mensaje.</strong></h5>
            </div>
           <form class="col s12  z-depth-3" action="" method="POST"> 
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Nombre</label>
                        <input type="text" class="validate" name="Nombre" >
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Apellido</label>
                        <input type="text" class="validate" name="Apellido" >
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Telefono</label>
                        <input type="tel" class="validate" name="Telefono" >
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label for="name">Correo Electronico</label>
                        <input type="email" class="validate" name="Correo" >
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea2" name="Mensaje" class="materialize-textarea" data-length="300"></textarea>
                        <label>Mensaje</label>
                        <span class="helper-text" data-error="usted supero el limite de 300 caracteres"
                            data-success="mensaje valido">escriba su mensaje</span>
                    </div>
                </div>

                <div class="center-align">
                    <div class="g-recaptcha" data-sitekey="6LezsYoaAAAAAFAKqQnHiSRssT_SokckS-iddYLf"></div>
                    <button class="btn waves-effect waves-light" type="submit">Enviar<i
                            class="material-icons right">send</i></button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection