<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <title>Projeto Cadastro de Produtos </title>
</head>

<body>
    <h1>Cadastro de Produtos</h1>
    <div class="cadastro">

        <form action="processamento/cadastro-produto.php" method="POST">
            <p><input type="text" name="NomeProduto" placeholder="Nome" required></p>
            <p><input type="text" name="Descricao" placeholder="Descrição do produto" required></p>
            <p><input type="text" name="Tamanho" placeholder="Tamanho" required></p>
            <p><input type="number"  min="0" max="10" name="Qtd" placeholder="Quantidade" required></p>
            <p><button type="submit">Cadastrar</button></p>
        </form>
    </div>

</body>

</html>