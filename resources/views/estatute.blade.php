@extends('layouts.clienttemplate')
@section('title','JASSC-Estatuto')

@section('content')
<div class="estatutocontainer container" >
    <div class="estatutocontent container">
            <div class="imgcontainer">
                <img src="images/estatuto.svg" >
            </div>
        <div class="estatutotext container">
            <h1>ESTATUTO</h1>
            <h2>FINES DE LA JASSC</h2>
            <p>Prestar servicios en los centros poblados del ámbito rural en las mejores condiciones de calidad, para cubrir las necesidades de salubridad de los asociados de la "JASSC", a través de la adecuada administración de uno o de varios de los sisguientes sistemas:</p>
            <ul>
                <li>SERVICIO DE AGUA POTABLE</li>
                <li>SISTEMA DE DISTRIBUCION</li>
                <li>SERVICIO DE ALCANTARILLADO</li>
                <li>SERVICIO DE DISPOSICION DE EXCRETAS</li>
            </ul>

        </div>
        <div class="estatutobtn container">
            <a href="archivos/estatuto.pdf" download="JASSC2021.pdf"><button class="buttonstatute">DESCARGAR ESTATUTO</button></a>
        </div>
    </div> 
</div>
@endsection