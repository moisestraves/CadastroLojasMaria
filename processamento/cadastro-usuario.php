<?php
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';


//Recebimento dos campos do formulário de cadastro novo usuário
$Nome = $_POST['NomeUsuario"'];
$Email = $_POST['EmailUsuario'];
$Pass = $_POST['SenhaUsuario'];
$Ativo = $_POST['Perfil'];

//Chamada da Funcao  que executar a query de  insert
$InserNovoUsuario = NovoUsuario($conexao,$Nome,$Email,$Pass,$Ativo);

if($InserNovoUsuario > 0){
  
    header('location:../painel-admin.html');
}else{

    echo "Produto não cadastrado!";

}

