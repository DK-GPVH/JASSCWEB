@extends('layouts.clienttemplate')
@section('title','JASSC|Datos del cliente')

@section('content')
 
    <div id="exitdatos"><a id="botonexitdatos" href="consulta"> <i class="fas fa-door-open"></i>SALIR</a> </div>
    <div>
        @foreach ($propiedadesarray as $propiedad)
        <table id="tablapropiedaddatos">
        <thead>
            <tr>
            <th>MANZANA <i class="fas fa-apple-alt"></i></th>
            <th>LOTE <i class="fas fa-sign"></i></th>
            <th>ZONA <i class="fas fa-chart-area"></i></th>
            <th>ESTADO <i class="fas fa-power-off"></i></th>
            <th>FECHA DE INSCRIPCION <i class="fas fa-calendar-day"></i></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$propiedad['manzana']}}</td>
                <td>{{$propiedad['lote']}}</td>
                <td>{{$propiedad['zona']}}</td>
                @if($propiedad['estado']==1)
                <td>ACTIVO </td>
                @else
                <td>INACTIVO </td>
                @endif
                <td>{{$propiedad['fecha_inscripcion']}}</td>
            </tr>
         
        </tbody>
        </table>

        <table id="deudas">
            <thead> 
                <tr>
                    <th id="otrosdatos"></th>
                    <th id="headdeudas" >DEUDAS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="cuerpootrosdatos">
        <table id="tablaclientedatos">
            <thead>
                <tr>
                    <th> <i class="fas fa-user"></i>CLIENTE <button id="desplegar_cliente" value="{{$propiedad['cliente_id']}}"><i class="fas fa-arrow-alt-circle-down"></i></button></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <li id="nombrecliente" style="display:none"></li>
                        <li id="documentocliente" style="display:none"></li>
                        <li id="telefonocliente" style="display:none"></li>
                    </td>
                   
                </tr>
            </tbody>
        </table>
        <table id="tablacategoriadatos">
            <thead>
                <tr>
                    <th><i class="fas fa-folder-open"></i>CATEGORIA<button id="desplegar_categoria" value="{{$propiedad['categoria_id']}}"><i class="fas fa-arrow-alt-circle-down"></i></button></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <li id="descripcion" style="display:none"></li>
                        <li id="monto" style="display:none"></li>
                    </td>
                </tr>
            </tbody>           
        </table> 
        </td>
        <td id="cuerpodeudas">
            <div id="cuerpodeudas-2">
                <div class="deuda_api">
                 @for($fechadeuda=\Carbon\Carbon::parse($propiedad['fecha_adeudo']);$fechaactual>$fechadeuda;$fechadeuda)
                 <div  class="card-deuda">
                    <div class="card-content-deuda">
                        <strong><i class="fas fa-calendar"></i> MES CORRESPONDIENTE:</strong>
                        <div>{{strtoupper($fechadeuda->locale('es')->monthName)}}</div>   
                        <strong> FECHA A PAGAR: </strong>
                        <div>{{$fechadeuda->addMonths(1)->format('Y-m-d')}}</div>   
                    </div>
                 </div>     
            @endfor 
                </div>
            </div>
        </td>
        </tr>
        </tbody>
    </table>
        @endforeach
    </div>
    
 
    <script>
        document.getElementById("desplegar_cliente").addEventListener('click',(e)=>{
            const id=document.getElementById("desplegar_cliente").value;
            fetch('https://www.jass-curipata.online/api/clientes/'+id)
            .then((res)=> res.json())
            .then(data=>{
                var nombre="",nrodocumento="",telefono="";
                nombre+='<a><i class="far fa-user-circle"></i> '+data.cliente.nombre+'&nbsp;'+data.cliente.apellidop+'&nbsp;'+data.cliente.apellidom+'</a>'
                nrodocumento+='<a> <i class="fas fa-id-card"></i> '+data.cliente.nrodocumento+'</a>';
                telefono+='<a> <i class="fas fa-phone"></i> '+data.cliente.telefono+'</a>';
                document.getElementById("nombrecliente").innerHTML=nombre;
                document.getElementById("documentocliente").innerHTML=nrodocumento;
                document.getElementById("telefonocliente").innerHTML=telefono;
                document.getElementById("nombrecliente").style.display="block";
                document.getElementById("documentocliente").style.display="block";
                document.getElementById("telefonocliente").style.display="block";
                document.getElementById("desplegar_cliente").style.display="none";
            }).catch(function(error) {
                console.log('ERROR');
            });
        })

        document.getElementById("desplegar_categoria").addEventListener('click',(e)=>{
            const id=document.getElementById("desplegar_categoria").value;
            fetch('https://www.jass-curipata.online/api/categorias/'+id)
            .then((res) => res.json())
            .then(data=>{
                var categoria = " ",monto=" ";
                categoria += '<a>'+data.categoria.descripcion+'</a>';
                monto += '<a>S/.'+data.categoria.monto_correspondiente+'</a>';

                document.getElementById("descripcion").innerHTML=categoria;
                document.getElementById("monto").innerHTML=monto;
                document.getElementById("descripcion").style.display="block";
                document.getElementById("monto").style.display="block";
                document.getElementById("desplegar_categoria").style.display="none";
            })
            .catch(function(error){
                console.log('ERROR');
            });
        })
    </script>
@endsection