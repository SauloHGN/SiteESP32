<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EspData;

class ConsultaController extends Controller
{

    public function AcessarDataBase(Request $request)
    {

        $request->validate([
            'serial' => 'required|integer',
        ]);


        $serial = $request->input('serial');

        //$registros = EspData::where('serial', $serial)->get();

        $registros = EspData::find($serial);

        if (!$registros) 
        {
            return response()->json(['error' => 'Nenhum registro encontrado para o número de série fornecido'], 404);
        }


        return view('estatistica', ['registros' => $registros]);
    }

}
