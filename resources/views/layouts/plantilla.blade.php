<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universal De Gradas | Encuentra productos como gradas,cerrajería,estructuras metalicas</title>
    <link rel="shortcut icon" type="image/x-icon" href="LOGOS/favicon.ico">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"
        rel="stylesheet" media="screen,projection">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css"
        rel="stylesheet" media="screen,projection">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5944715520754383"
     crossorigin="anonymous"></script>
</head>

<body>
    <nav class="light-blue nav-extended">
        <div class="nav-wrapper">
            <a id="logo-container" class="brand-logo center">
                <img style="height: 60px;" src="{{ asset('LOGOS/nombrelogo.png') }}">
            </a>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab" style="width: 20%;"><a href="/" routerLinkActive="active">Inicio</a></li>
                <li class="tab" style="width: 20%;"><a href="/acerca" routerLinkActive="active">Acerca de
                        Nosotos</a></li>
                <li class="tab" style="width: 20%;"><a href="/servicio" routerLinkActive="active">Servicios</a>
                </li>
                <li class="tab" style="width: 20%;"><a href="/catalogo" routerLinkActive="active">Catalogo</a>
                </li>
                <li class="tab" style="width: 20%;"><a href="/contacto" routerLinkActive="active">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="fixed-action-btn toolbar renderOpen">
        <a class="btn-floating btn-large blue">
            <i class="large material-icons">chat</i>
        </a>
        <ul>
            <li class="waves-effect waves-light"><a href="tel:+5726636116"><i class="material-icons">phone</i></a></li>
            <li class="waves-effect waves-light"><a
                    href="https://wa.me/573182702331?text=Hola%20estoy%20interesado%20en%20una%20cotizacion"
                    target="_blank"><i class="material-icons">phone_android</i></a></li>
            <li class="waves-effect waves-light"><a href="mailto:ventas@universaldegradas.com"><i
                        class="material-icons">email</i></a></li>
            <li class="waves-effect waves-light"><a href="/contacto"><i class="material-icons">contacts</i></a>
            </li>
        </ul>
    </div>

    @yield('contenido')

    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.slider').slider({
                full_width: true
            });
            $('.fixed-action-btn').floatingActionButton({
                toolbarEnabled: true
            });
        });
    </script>
    <footer class="page-footer light-blue">
        <div class="row">
            <div class="col 3s">
                <img height="90%" width="90%" src="{{ asset('LOGOS/nombrelogo.png') }}">
            </div>
            <div class="col s7 left-align">
                <p class="grey-text text-lighten-4">
                    Somos una empresa con mas de 20 años de experiencia en la Comercialización de graderia, cerrajeria y
                    servicios
                    varios, con el compromiso de dejar satisfechos todos nuestro clientes.
                    <br> Daremos vida a todas tus ideas.
                </p>
                <div class="col l6 s12">
                    <h5>Redes Sociales</h5>
                    <a href="https://www.facebook.com/UniversalDelGradas/" target="_blank">
                        <img src="{{ asset('img/Icons/facebook.png') }}" style="width:40px; height:40px;"></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/universaldegradas/" target="_blank">
                        <img src="{{ asset('img/Icons/instagram.png') }}" style="width:40px; height:40px;"></a>


                </div>

                <div class="col l4 offset-l2 s12">
                    <h5>Tiendas virtuales</h5>
                    <ul>
                        <li><a href="https://eshops.mercadolibre.com.co/universaldegradas" target="_blank"><img
                                    src="{{ asset('img/Icons/mercadolibre.png') }}"
                                    style="width:50px; height:50px;"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a
                                href="https://www.olx.com.co/profile/81391098" target="_blank"><img
                                    src="{{ asset('img/Icons/olx.png') }}" style="width:50px; height:50px;"></a></li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                © 2020 Universal de gradas, All rights reserved.
            </div>
        </div>

    </footer>
</body>

</html>
