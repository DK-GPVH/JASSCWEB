<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginClientController extends Controller
{
    public function __invoke()
    {
        return view('loginclient');
    }
}
