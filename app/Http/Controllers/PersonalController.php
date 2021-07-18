<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function __invoke()
    {
        return view('personal');
    }
}
