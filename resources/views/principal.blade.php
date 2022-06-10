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
                                        <li>Lunes: 9:00 a.m. -- 1:00 p.m. / 3:00 p.m. -- 5:00 p.m.</li>
                                        <li>Martes: 9:00 a.m. -- 1:00 p.m. / 3:00 p.m. -- 5:00 p.m.</li>
                                        <li>Miercoles: 9:00 a.m. -- 1:00 p.m. / 3:00 p.m. -- 5:00 p.m.</li>
                                        <li>Jueves: 9:00 a.m. -- 1:00 p.m. / 3:00 p.m. -- 5:00 p.m.</li>
                                        <li>Viernes: 9:00 a.m. -- 1:00 p.m. / 3:00 p.m. -- 5:00 p.m.</li>
                                        <li>Sabado: 9:00 a.m. -- 1:00 p.m. / 3:00 p.m. -- 5:00 p.m.</li>
                                        <li>Domingo: CERRADO</li>
                                        <li>Personal de turno:Katherin Ventura Hurtado</li>
                                        <br>
                                        <li>Direccion de atencion:Curipata Mz.31 Lt.18 Zona B</li>
                                </ul>
                        </div>
                </div>
                <div class="anunciocontainer container">
                        <div class="imgcontainera container">
                                <img src="images/anuncio.svg">
                        </div>
                        <h1 class="anunciotitle">ANUNCIO</h1>
                        <div class="anunciocontent">
                                <p>TU JASSC, TU FUTURO</p>
                                <P>SI SOMOS MÁS, SOMOS MEJORES</P>
                                <br>
                                <p>EMPADRÓNATE , el numero de empadronados si cuenta.</p>
                                <time>09/06/22-JASSC CURIPATA 2022</time>
                        </div>
                </div>
                <div class="tarifacontainer container">
                        <div class="imgcontainert">
                                <img src="images/tarifa.svg">
                        </div>
                        <h1 class="tarifatitle">TARIFA</h1>
                        <div class="tarifalist">
                                <ul>
                                        SERVICIO :
                                        <li>COMERCIAL : S/ 35.00 soles</li>
                                        <li>DOMICILIO : S/ 8.00 soles</li>
                                        RECONEXION : 
                                        <li>MATRIZ : S/ 150.00 soles</li>
                                        <li>CAJA REGISTRO : S/ 55.00 soles </li>
                                        DEBERES :
                                        <li>ASAMBLEA : S/ 20.00 soles</li>
                                        <li>FAENAS : S/ 50.00 soles</li>
                                        
                                </ul>
                        </div>
                </div>
                <div class="pnotacontainer">
                        <p><span>NOTA :</span> Recuerden cancelar sus deudas antes de exceder los dos meses de morosidad debido a que culminado este tiempo se procedera al corte respectivo del servicio.</p>
                </div>
        </div>
      
@endsection