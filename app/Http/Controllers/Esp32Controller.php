<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

use App\Models\EspData;

class Esp32Controller extends Controller
{
    public function salvarDados(Request $request)
    {
        try 
        {
            // Configurações de conexão com o banco de dados SQLite
            $caminhoDB = database_path('BancoESP32.sqlite'); // Substitua pelo caminho real do seu banco
            $pdo = new PDO("sqlite:$caminhoDB");

            // Dados recebidos da solicitação
            $dados = $request->json()->all();

            // Prepara a consulta SQL
            $sql = "INSERT INTO espdata (id, nome_arq, tempo_exec, data_exec) VALUES (:id, :nome_arq, :tempo_exec, :data_exec)";
            $stmt = $pdo->prepare($sql);

            // Executa a consulta com os dados
            $stmt->execute([
                ':id' => $dados['id'],
                ':nome_arq' => $dados['nome_arq'],
                ':tempo_exec' => $dados['tempo_exec'],
                ':data_exec' => $dados['data_exec'],
            ]);


            return response()->json(['message' => 'Dados salvos com sucesso', 'request_data' => $request->all()]);
        } 
        catch (\Exception $e) 
        {
            return response()->json(['error' => 'Erro ao salvar os dados'], 500);
        }
    }
}
