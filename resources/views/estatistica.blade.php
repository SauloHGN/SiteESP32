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
        width: 100%;
    }

    th, td 
    {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th 
    {
        background-color: #f2f2f2;
    }
</style>

<body>
    <h1>TESTE</h1>
    <table>
            <thead>
                <tr>
                    <th>Nome do Arquivo</th>
                    <th>Tempo de Jogo</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ 'Mario' }}</td>
                        <td>{{ '2' }}</td>
                        <td>{{ '12/11/2023' }}</td>
                    </tr>
            </tbody>
        </table>
</body>
</html>