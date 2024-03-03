<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicao</title>
</head>
<body>

    <h1>Edicao</h1>

    <form method="POST">
        @csrf <!-- Adiciona o token CSRF para proteção contra ataques CSRF -->
        Nome:
        <input type="text" name="nome" value="{{$data->nome}}"><br><br>
        E-mail:
        <input type="text" name="email" value="{{$data->email}}"><br><br>
        CPF:
        <input type="text" name="cpf" value="{{$data->cpf}}"><br><br>
        Descrição:
        <input type="text" name="descricao" value="{{$data->descricao}}"><br><br>
        Preço:
        <input type="text" name="preco" value="{{$data->preco}}"><br><br>
        <input type="submit" value="Salvar"/>
    </form>

</body>
</html>
