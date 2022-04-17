@extends('layouts.clienttemplate')
@section('title','JASSC-Servicios')

@section('content')
<div class="avisodenoimplementacion">
    <p>El siguiente chat se encargara de conectarlo con miembros de la asociacion y personal administrativo para solucionar sus consultas;por favor , priorice utilizar un lenguaje adecuado.</p>
    <p>Esperamos disfrute de una experiencia agradable , JASSC.</p>
    <a id="Button_chat"href="https://chat-jassc-curipata.herokuapp.com/" target="_blank">CONECTARME AL CHAT</a>
    <h3>INSTRUCCIONES</h3>
    <p>1.- En la ventana principal tendra que ingresar el nombre con el cual se dara a conocer dentro del chat.</p>
    <img src="images/principal-chat.png">
    <p>2.- Al ingresar al chat podra visualizar un mensaje de bienvenida y otros detalles.</p>
    <img src="images/box-chat.png">
    <p>3.- En el sector derecho podra observar los integrantes dentro del chat.</p>
    <img src="images/Integrantes-chat.png">
    <p>4.- En la parte inferior podra encontrar la caja de texto donde podra ingresar los mensajes y asi comunicarce con los otros integrantes.</p>
    <img src="images/mensage-chat.png">
    <p>5.- Los mensajes no seran guardados y una vez salir de el chat no podra retomar la misma conversacion procure tener una buena conexion a internet.</p>
</div>
@endsection