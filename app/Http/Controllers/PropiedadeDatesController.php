<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class PropiedadeDatesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datosenviados=$request->input();
        $propiedad=HTTP::get('https://www.jass-curipata.online/api/propiedades/'.$datosenviados['manzana'].'/'.$datosenviados['lote'].'/'.$datosenviados['suministro']);
        $propiedadesarray= $propiedad->json();
        $fechaactual=Carbon::now();
   
        if(in_array(false,$propiedadesarray,true)){
            $display=1;
            return view('loginclient',compact('display'));
        }else{
        return view('datospropiedad',compact('propiedadesarray','fechaactual'));
        }
            
    }
}
