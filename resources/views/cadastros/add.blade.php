<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>
<body>

    <h1>Adicionar</h1>

    <form method="POST">
        @csrf <!-- Adiciona o token CSRF para proteção contra ataques CSRF -->
        Nome:
        <input type="text" name="nome"><br><br>
        E-mail:
        <input type="text" name="email"><br><br>
        CPF:
        <input type="text" name="cpf"><br><br>
        Descrição:
        <input type="text" name="descricao"><br><br>
        Preço:
        <input type="text" name="preco"><br><br>
        <input type="submit" value="Adicionar"/>
    </form>

</body>
</html>
