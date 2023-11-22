<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EspData;

class APIController extends Controller
{
    public function index(Request $request)
    {

        return EspData::all();
    }

    public function create(Request $request)
    {
        EspData::create($request->all());
    }

    public function show($id)
    {
        $dados = ESpData::find($id);

        if (!$dados) {
            return response()->json(['message' => 'Dados não encontrado'], 404);
        }

        return response()->json($dados, 200);
    }

}
