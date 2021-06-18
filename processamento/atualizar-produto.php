<?php
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';

$CodProduto = $_POST['codigo'];
$nome = $_POST['NomeProduto'];
$desc =$_POST['DescProduto'];
$tamanho = $_POST['Tamanho'];
$qtd = $_POST['qtd'];


$UpdateProduto = AtualizarProduto($conexao,$CodProduto,$nome,$desc,$tamanho,$qtd);

header('location:listar-produtos.php');


  

?>