<?php

$servidor="localhost";
$usuario="conectar_loja";
$senha="h2ZyR9B@/z)cJz)a";
$banco="loja";


//Conectando com o servidor
$conexao = mysqli_connect($servidor , $usuario , $senha , $banco);

if($conexao){

   /* var_dump($conexao); */
    

    mysqli_set_charset ($conexao, "utf8");
       
 } 
 


?>