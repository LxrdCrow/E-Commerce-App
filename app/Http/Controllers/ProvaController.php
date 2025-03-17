<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvaController extends Controller
{
    public function provaFunction()
    {
        $calcolo = 1+1;

        return $calcolo;
    }

    public function provaData(Request $request)
    {
        return 'Dati ricevuti: ' . $request->input('data');
    }
}
