<?php
session_start();
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';

//Verificação da Sessão do Usuário no Sistema
if (empty($_SESSION['email'])) {

    header('location:..\index.html');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/layout.css">

    <title>Projeto Cadastro de Produtos </title>
</head>

<body>

    <div class="container">
        <form method="POST" action="#">
            <table class="table text-center table-hover table-sm table-light ">
                <thead class="thead-light  ">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Tamanho</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Detalhes</th>
                        <th scope="col">Excluir</th>

                    </tr>
                </thead>
                <?php
                $produtos = ListarProdutos($conexao);

                //Laço  
                foreach ($produtos as $ProdutosRegistrados) {
                ?>
                    <tr>
                        <td><?= $ProdutosRegistrados['codigo']; ?></td>
                        <td><?= $ProdutosRegistrados['nome']; ?></td>
                        <td><?= $ProdutosRegistrados['composicao']; ?></td>
                        <td><?= $ProdutosRegistrados['tamanho']; ?></td>
                        <td><?= $ProdutosRegistrados['quantidade']; ?></td>


                        <td><a href="produto.php?id=<?= $ProdutosRegistrados['codigo']; ?>" target="_self" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Abrir</a></td>
                        
                        <td><a href="deletar-produto.php?id=<?= $ProdutosRegistrados['codigo']; ?>" target="_self" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Excluir</a></td>
                    </tr>


                <?php
                } ?>

            </table>
    </div>


</html>