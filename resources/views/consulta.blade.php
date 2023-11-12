<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body>

<form action="{{ route('Dados') }}" method="POST">
    @csrf
    <label for="Serial">Serial<input type="text" name="serial"> </label><br>

    <button type="submit">Consultar</button>
</form>
    
</body>

    <style>

    body
    {
        min-width: 100vh;    
        background: #f5f2f2;
        font-family: sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
        display: grid;
        place-items: center;
        
    }
    form
    {
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 20rem;
        background: #FFF;
        border-radius: 0.5rem;
        padding: 3rem;
        box-shadow: 0 0 1.5rem rgba(0, 0, 0, 0.10);
        border-color: #0763c5;
        margin-top: 30px;
    }
    p
    {
        font-size: 65;
        font-weight: 700;
        color: #222;
        margin-bottom: 2rem;
    }
    label
    {
        font-size: 12;
        align-self: flex-start;
        transition: 0.15s linear;
        color: #222;
    }
    label:focus-within
    {
        color: #000;
    }
    input
    {
        font-size: 12;
        color: #222;
        padding: 1rem 0 0.5rem 0;
        width: 143%;
        border: none;
        border-color: #a0a0a0;
        border-bottom-width: 1.7px;
        border-bottom-style: double;
        margin-bottom: 3rem;
        transition: 0.15s
        
        
    }
    input:focus
    {
        outline: none;
        border-color: #dc2626;
    }
    button
    {    
        line-height:2rem;
        font-weight: 700;
        text-tranform: uppercase;
        width: 60%;
        padding: 0.5rem 0.5rem;
        background: transparent;
        color: #dc2626;
        border: 1px solid currentColor;
        border-radius: 6px;
        margin-top: 0.5rem;
        transition: 0.20s
    }
    button:hover, button:focus
    {
        outline:none;
        background: #dc2626;
        color:#fff;
    }

    </style>

</html>