<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function receberDados(Request $request)
    {
        // Validar os dados recebidos, se necessário
        $request->validate([
            'id' => 'required|integer',
            'nome_arq' => 'required|string',
            'tempo_exec' => 'required|numeric',
            'data_exec' => 'required|date',
        ]);

        // Criar um novo registro no banco de dados
        Registro::create([
            'id' => $request->input('id'),
            'nome_arq' => $request->input('nome_arq'),
            'tempo_exec' => $request->input('tempo_exec'),
            'data_exec' => $request->input('data_exec'),
        ]);

        return response()->json(['status' => 'Dados recebidos com sucesso']);
    }
}
