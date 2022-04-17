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
            

            @if($display==1)

            <div id="modal_error" style="display:block">
              <div id="modal-content">
                <a href="consulta" id="close_modal">&times;</a>
                 
                <p>La propiedad no esta registrada o algun dato esta incorrecto; verifique la informacion.
                    JASSC le agradece.
                </p>
              </div>
            
          </div>

            @endif
          
           
</div>
          
    
@endsection

