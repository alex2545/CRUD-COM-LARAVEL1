<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem</h1>

    @if(session('warning'))
    @alert{{session('warning')}}
    @endalert
    @endif
    <table border="3" width="100%">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>CPF</th>
            <th>DESCRIÇÃO</th>
            <th>PREÇO</th>
            <th>Ações</th>
        </tr>
        @if(count($list) > 0)
        @foreach($list as $item)
        <tr>
            <td>{{ $item->id }}</td> 
            <td>{{ $item->nome }}</td> 
            <td>{{ $item->email }}</td> 
            <td>{{ $item->cpf }}</td> 
            <td>{{ $item->descricao }}</td> 
            <td>{{ $item->preco }}</td> 
            <td><a href="{{route('cadastros.del', ['id'=>$item->id])}}">Excluir</a>
        <a href="{{route('cadastros.edit', ['id'=>$item->id])}}">Editar</a>
        </th>
        </tr>
        @endforeach
        @else
         Nao ha itens a serem listados
    @endif
   
    </table><br><br>
    <a href="{{route('cadastros.add')}}">ADICIONAR</a>
</body>
</html>
