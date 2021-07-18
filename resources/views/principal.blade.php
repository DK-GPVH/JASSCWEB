@extends('layouts.clienttemplate')

@section('title','JASSC-Principal')


@section('content')
        <div class="principalcontainer container">
                <div class="horariocontainer container">
                        <div class="imgcontainerh">
                                <img src="images/time.svg">
                        </div>
                        <h1 class="horariotitle">HORARIO DE ATENCION</h1>
                        <div class="horariolist">
                                <ul>
                                        <li>Lunes: 9.00 a.m. -- 1.00 p.m.</li>
                                        <li>Martes: 9.00 a.m. -- 1.00 p.m.</li>
                                        <li>Miercoles: 9.00 a.m. -- 1.00 p.m.</li>
                                        <li>Jueves: 9.00 a.m. -- 1.00 p.m.</li>
                                        <li>Viernes: 9.00 a.m. -- 1.00 p.m.</li>
                                        <li>Sabado: 9.00 a.m. -- 1.00 p.m.</li>
                                        <li>Domingo: CERRADO</li>
                                        <li>Personal de turno:Katherin Ventura Hurtado</li>
                                        <li>Direccion:Curipata Mz.26 Lt.6 Zona B</li>
                                        <li>Direccion de atencion:Curipata Mz.8 Lt.9 Zona A</li>
                                </ul>
                        </div>
                </div>
                <div class="anunciocontainer container">
                        <div class="imgcontainera container">
                                <img src="images/anuncio.svg">
                        </div>
                        <h1 class="anunciotitle">ANUNCIO</h1>
                        <div class="anunciocontent">
                                <p>Por la problematica mundial actualmente no realizamos reuniones.</p>
                                <time>16/07/2021-JASS CURIPATA 2021</time>
                        </div>
                </div>
                <div class="tarifacontainer container">
                        <div class="imgcontainert">
                                <img src="images/tarifa.svg">
                        </div>
                        <h1 class="tarifatitle">TARIFA</h1>
                        <div class="tarifalist">
                                <ul>
                                        <li>COMERCIAL : S/. 24.00 soles</li>
                                        <li>DOMICILIO : S/. 6.00 soles</li>
                                </ul>
                        </div>
                </div>
                <div class="pnotacontainer">
                        <p><span>NOTA :</span> Recuerden cancelar sus deudas antes de exceder los tres meses de morosidad debido a que culminado este tiempo se procedera al corte respectivo del servicio.</p>
                </div>
        </div>
      
@endsection