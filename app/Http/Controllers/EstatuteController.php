<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstatuteController extends Controller
{
    public function __invoke(){
        return view('estatute');
    }
}

