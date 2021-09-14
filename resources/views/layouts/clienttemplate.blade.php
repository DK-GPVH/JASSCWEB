<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=0, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Pagina web junta administradora de servicios de saneamiento curipata - JASSC">
    <meta name="author" content="JASSC-CURIPATA">
    <meta name="Keywords" content="JASSC,jassc-curipata,servicio de agua curipata,agua curipata">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kirang+Haerang&display=swap" rel="stylesheet">
    <title> @yield('title') </title>
    <link href="{{asset('css/client.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Viaoda+Libre&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&family=Viaoda+Libre&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@300&family=Lato:ital@1&family=Zen+Loop&family=Zen+Tokyo+Zoo&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="http://fonts.cdnfonts.com/css/blanka" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/one-day" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/lilly" rel="stylesheet">

    
</head>
<body>
    <div class="header">
        <a  id="title1"> JASSC</a>
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu"><i class="fas fa-bars"></i></label>
        <ul class="nav">
            <a class="title" id="title"> JASSC</a>
            <a href="/principal">PRINCIPAL</a>
            <a href="/servicio">SERVICIOS</a>
            <a href="/estatuto">ESTATUTO</a>
            <a href="/personal">PERSONAL</a>
            <a href="/personal">CONECTATE CON LA COMUNIDAD</a>
            <a href="/consulta">CONSULTE SU DEUDA</a>
        </ul>
    </div>
    <div class="containergeneral container">
        
        @yield('content')
    </div>
    
    <div class="footer container">
                <h1 class="redestitle">REDES SOCIALES</h1>
                <div class="listredes">
                    <a href="https://www.tiktok.com/@jasscuripata_laoroya" target="_blank"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.facebook.com/Junta-Administradora-De-Servicios-De-Saneamiento-Curipata-JASSC-Curipata-107153441561440" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/jassccuripata" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/JASSC01891851" target="_blank"><i class="fab fa-twitter"></i></a>
                </div>
                <h1 class="contacttitle">CONTACTENOS</h1>
                <div class="contacto">
                    <ul>
                        <li><i class="fas fa-home"></i>Curipata mz.26 lt.6 zona B </li>
                       <li><i class="fas fa-phone"></i>+51 946-784-841</li> 
                       <li><a href="https://www.facebook.com/messages/t/107153441561440" target="_blank"><i class="fab fa-facebook-messenger"></i></a>JASSC</li>
                        <li><a href="https://wa.me/51946784841" target="_blank"><i class="fab fa-whatsapp"></i></a>+51 946-784-841</li>
                        <li><i class="far fa-envelope"></i>admijassccuripata@gmail.com</li>
                        <li> <a href="http://t.me/jassc2021" target="_blank"><i class="fab fa-telegram-plane"></i></a>+51 946-784-841</li>
                    </ul>
                    
                </div>
                <h1 class="gestiontitle">GESTION</h1>
                <a class="gestion" href="/personal"><i class="fas fa-users">  2018-2021</i></a>
            <div class="sociosestrategicos"> 
                <a href="https://www.gob.pe/ana" target="_blank"><img src="images/logo_ANA.svg"></a>
                <a href="https://www.gob.pe/otass" target="_blank"><img src="images/LOGO_OTASS (1).svg"></a>
                <a href="https://www.sunass.gob.pe/" target="_blank"><img src="images/logo-sunass (2).svg"></a>
                <a href="https://www.sunat.gob.pe/" target="_blank"><img src="images/SUNAT.svg"></a>
               
            </div>
    </div>
    
    <div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
    </div>
</body>
</html>