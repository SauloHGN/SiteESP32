<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{

    public function AcessarDataBase(Request $request)
    {
        // $nomeArquivo = $request->input('nome_arquivo');

        // // Consulta no banco de dados para obter informações com base no nome do arquivo
        // $dados = DB::table('sua_tabela')->where('nome_arquivo', $nomeArquivo)->first();

        // return view('Dados', ['dados' => $dados]);
        return view('estatistica');
    }

}
