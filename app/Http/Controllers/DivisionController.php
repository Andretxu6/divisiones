<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Division;

class DivisionController extends Controller
{
    public function __construct()
    {
        //el except porque no tiene que controlar la funcion que devuelve la vista con el error.
        $this->middleware('division')->except('divisorInvalido');
    }

    public function getResultado(Request $request)
    {
        $result = $request->dividendo/$request->divisor;
        $this->guardarResultado($request->dividendo, $request->divisor, $result);
        return view('resultado',['resultado' => $result]);
    }

    protected function guardarResultado($dividendo, $divisor, $resultado)
    {
        Division::insert([
            'dividendo' => $dividendo,
            'divisor' => $divisor,
            'resultado' => $resultado
        ]);
    }

    public function divisorInvalido(){
        return view('divisorInvalido');
    }
}
