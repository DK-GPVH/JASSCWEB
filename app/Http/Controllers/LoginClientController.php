<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginClientController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $display=0;
        return view('loginclient',compact('display'));
    }
   
}
