<?php
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';

$ProdutoCodigo = $_GET['id'];


$DelProduto = DeletarProduto($conexao,$ProdutoCodigo);



if ($DelProduto > 0) {

    header('location:listar-produtos.php');
} else {

    echo "Não Foi Localizado Dados Para Remoção  ";
}