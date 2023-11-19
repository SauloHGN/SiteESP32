<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{

    public function AcessarDataBase(Request $request)
    {

        $request->validate([
            'serial' => 'required|integer',
        ]);


        $serial = $request->input('serial');

        $registros = EspData::where('serial', $serial)->get();

        return view('estatistica', ['registros' => $registros]);
    }

}
