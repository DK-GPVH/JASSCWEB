@extends('layouts.clienttemplate')
@section('title','JASSC-Servicios')

@section('content')



    
<div id="formulario_consulta" >
            <form class="form-signin"  action="propiedaddatos" method="POST">
                @csrf
              <div class="inner-addon left-addon">
                <label class="control-label">Manzana</label>
                  <input type="number" class="form-control" name="manzana" placeholder="Escriba su manzana" required="" autofocus=""/>
              </div>
              <div class="inner-addon left-addon">
                <label class="control-label">Lote</label>
                  <input type="number" class="form-control" name="lote" placeholder="Escriba su lote" required="" autofocus=""/>
              </div>
              <div class="inner-addon left-addon">
                <label class="control-label">Suministro</label>
                  <input type="label" class="form-control" name="suministro" placeholder="aqui escriba su combinacion de suministro" required="" autofocus=""/>
              </div>
              <button id="botonconsultar"  class="btn-consulta">Consultar</button>
            </form>         
</div>

<br>
<div>
  <h1 style="text-align:center;color:var(--blue)">DISFRUTE DE OTRA EXPERIENCIA CON LA APLICACION :</h1>
  <a style="margin-left:25%"href="archivos/jassc.apk" download="jassc.apk"><button class="buttonstatute"><i class="fab fa-android"></i>DESCARGAR APLICACION ANDROID</button></a>

</div>


@if($display==1)

<div id="modal_error" style="display:block">
  <div id="modal-content">
    <a href="consulta" id="close_modal">&times;</a>
    <img src="http://www.canalgif.net/Gifs-animados/Agua/Gotas-de-agua/Gif-animado-Gotas-de-agua-04.gif"> 
    <p>La propiedad no esta registrada o algun dato esta incorrecto; verifique la informacion.
        JASSC le agradece.
    </p>
  </div>

</div>

@endif
          
    
@endsection

