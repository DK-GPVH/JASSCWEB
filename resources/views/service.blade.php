@extends('layouts.clienttemplate')
@section('title','JASSC-Servicios')

@section('content')
<div class="servicescontainer container">
    <div class="slider">
        <ul>
            <li><img src="images/jassc.jpeg"></li>
            <li><img src="images/jassc4.jpeg"></li>
            <li><img src="images/jassc11.jpeg"></li>
            <li><img src="images/jassc12.jpeg"></li>
        </ul>        
    </div>
    <h1 class="servicetitle">SERVICIO</h1>
    <div class="targetservices">
        <div class="target">
            <figure>
                <img class="frontal"src="images/Katherin Ventura.jpeg">
                <figcaption class="atras">
                    <h2>ADMINISTRACION</h2>
                    <hr>
                    <p>Administracion de los recursos y finanzas del servicio de saneamiento sector Curipata</p>
                </figcaption>
                <h1>ADMINISTRACION</h1>
            </figure>
        </div>
        <div class="target">
            <figure>
                <img class="frontal"src="images/jassc16.jpeg">
                <figcaption class="atras">
                    <h2>REPARACION</h2>
                    <hr>
                    <p>Reparacion de tuberias en el sector Curipata</p>
                </figcaption>
                <h1>REPARACION</h1>
            </figure>
        </div>
        <div class="target">
            <figure>
                
                <img class="frontal"src="images/jassc7.jpeg">
                <figcaption class="atras">
                    <h2>CONSERVACION</h2>
                    <hr>
                    <p>Conservacion de las captaciones en Rihuispuquio</p>
                </figcaption>
                <h1>CONSERVACION</h1>
                
            </figure>
        </div>
        <div class="target">
            <figure>
                
                <img class="frontal"src="images/jassc15.jpeg">
                <figcaption class="atras">
                    <h2>MANTENIMIENTO</h2>
                    <hr>
                    <p>Mantenimiento del reservorio Curipata 1-2</p>
                </figcaption>
                <h1>MANTENIMIENTO</h1>
                
            </figure>
        </div>
    </div>
</div>
@endsection

