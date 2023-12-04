<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estatísticas</title>
</head>

<style>

    table 
    {
        border-collapse: collapse;
        width: 80%;
        margin:0 auto;
        margin-top: 15vh;
    }

    th, td 
    {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 4px;
    }

    th 
    {
        background-color: #f2f2f2;
    }
</style>

<body>

        <table>
            <thead>
                <tr>
                    <th>Nome do Arquivo</th>
                    <th>Tempo de Jogo</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
            @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->nome_arq }}</td>
                        <td>{{ $registro->tempo_exec }}</td>
                        <td>{{ \Carbon\Carbon::parse($registro->data_exec)->format('d/m/Y') }}</td>
                    </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>