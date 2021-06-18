<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <title>Projeto Cadastro de Produtos </title>
</head>

<body>
<h1>Novo Usuário Cadastro</h1>
    <div class="cadastro">
                
        <form action="processamento/cadastro-produto.php" method="POST">
            <p><input type="text" name="NomeUsuario" placeholder="Nome" required></p>
            <p><input type="email" name="EmailUsuario" placeholder="Email" required></p>
            <p><input type="password" name="SenhaUsuario" placeholder="Senha" required></p>
            <p><input type="number"  min="1" max="2" name="Perfil" placeholder="Ativo 1 Sim 2 Não" required></p>
            <p><button type="submit">Cadastrar</button></p>
        </form>
    </div>

</body>

</html>