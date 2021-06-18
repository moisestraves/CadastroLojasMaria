<?php
session_start();
if (empty($_SESSION['email'])) {

header('location:..\index.html');
}
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout.css">
    <title>Projeto Cadastro de Produtos </title>
</head>
<body>
 
    <div id="painel">
        <h1 class='painel'>Painel de Controle </h1>
        <ul>
            <li> <a href="cadastrar-produto.html">NovoProduto</a></li>
            <li> <a href="processamento/listar-produtos.php">Listar Produtos</a> </li>
            <li> <a href="cadastrar-usuario.php">Novo Usuário</a> </li>
            <li> <a href="#">Sair</a> </li>

            
        </ul>
    </div>

</body>

</html>


