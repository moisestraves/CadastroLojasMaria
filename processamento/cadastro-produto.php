<?php
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';


//Recebimento dos campos do formulário de cadastro do produto POST
$NomeProduto = $_POST['NomeProduto'];
$DescricaoProduto = $_POST['Descricao'];
$TamanhoProduto = $_POST['Tamanho'];
$Qtd_produto = $_POST['Qtd'];

//Chamada da Funcao  que executar a query de  insert
$InsertProduto = CadatrarProduto($conexao,$NomeProduto,$DescricaoProduto,$TamanhoProduto,$Qtd_produto );

if($InsertProduto > 0){
  
    header('location:../painel-admin.html');
}else{

    echo "Produto não cadastrado!";

}




?>


