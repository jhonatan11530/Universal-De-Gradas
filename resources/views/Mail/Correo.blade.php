<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje de la pagina web</title>
</head>
<body>
    <p>UNA PERSONA A SOLICITADO UNA COTIZACION O TIENE ALGUNA DUDA AL RESPECTO ESTOS SON LOS DATOS DEL CLIENTE<br><br> Nombre del cliente:{{$mensaje['Nombre']}} {{$mensaje['Apellido']}} <br><br> Telefono de contacto: {{$mensaje['Telefono']}} <br><br> Correo electronico: {{$mensaje['Correo']}} <br><br> Mensaje o Asunto: {{$mensaje['Mensaje']}} <br><br> POR FAVOR LLAMAR AL CLIENTE PUEDE SER PARA UNA COTIZACION O PARA TENER INFORMACION DE LOS PRODUCTOS OFRECIDOS POR <strong>UNIVERSAL DE GRADAS</strong> </p>
</body>
</html>