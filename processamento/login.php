<?php
session_start();
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';

//Aqui estou recebendo e verificando o login de acesso do usuário

$EmailLogin =  mysqli_escape_string($conexao, $_POST['Login']);
$SenhaLogin = mysqli_escape_string($conexao,$_POST['Senha']);

$acessar =loginSistema($conexao,$EmailLogin,$SenhaLogin);

?>
