<?php
require 'conexao.php';


//Função para cadastrar um novo usuário
function NovoUsuario($conexao, $nome, $email, $senha,$perfil)
{
    $SqlCadastro = "INSERT INTO usuarios(nome, email, senha, ativo) VALUES('$nome','$email','$senha','$perfil')";

    return mysqli_query($conexao, $SqlCadastro) or die(mysqli_error($conexao));
}

//Função  que vaz a verificação do login 

function loginSistema($conexao,$login,$pass){

    $SqlLogin ="SELECT * FROM usuarios where email='$login' AND  senha='$pass'";
    $resultLogin = mysqli_query($conexao,$SqlLogin);

    if(mysqli_fetch_row($resultLogin)> 0){

        header('location:../painel-admin.php');
        $_SESSION['email'] = $login; 

    }
    else{

        header('location:../index.html');
    }


}

//Função que executa a query de cadastro do produto
function CadatrarProduto($conexao, $NomeProduto, $DescricaoProduto, $TamanhoProduto, $Qtd_produto)
{
    $SqlCadastro = "INSERT INTO produtos(codigo, nome, composicao, tamanho, quantidade) VALUES('null','$NomeProduto','$DescricaoProduto','$TamanhoProduto','$Qtd_produto')";

    return mysqli_query($conexao, $SqlCadastro) or die(mysqli_error($conexao));
}

//Função   que lista todos os produtos cadastrados
function ListarProdutos($conexao)
{

    $Sql_produto = 'SELECT * FROM produtos';

    $ProdutosLista = mysqli_query($conexao, $Sql_produto);

    //Array que  faz o armazenamento  dos produtos
    $Produtos = array();

    while ($dadosProduto = mysqli_fetch_assoc($ProdutosLista)) {

        $Produtos[] = $dadosProduto;
    }

    return $Produtos;
}
//Funçao  que faz o delete  produto
function DeletarProduto($conexao, $codigo)
{

    $RemoverProduto = "DELETE FROM produtos where codigo='$codigo' LIMIT 1";

    $ResultadoDelete = mysqli_query($conexao, $RemoverProduto);

    return $ResultadoDelete;
}

function EditarProduto($conexao, $id)
{
    $SqlProduto = "SELECT * FROM  produtos where codigo='$id' LIMIT 1";

    $ResultadoProduto = mysqli_query($conexao, $SqlProduto);

    //Aqui foi criado um array  que vou usar para guardas os dados da query
    $produto = array();


    while ($prod = mysqli_fetch_assoc($ResultadoProduto)) {

        $produto[] = $prod;
        //Aqui foi salvo os dados do produto localizado para ser exibido para edição
    }

    return $produto;
}

//Função que faz update dos produto já cadastrado
function AtualizarProduto($conexao,$codigo,$nome,$descricao,$tamanho,$quantidade){

    $SqlAtualizar = "UPDATE produtos SET nome='$nome', composicao='$descricao', tamanho='$tamanho', quantidade='$quantidade' where codigo='$codigo'";
    $ResultadoUpdate = mysqli_query($conexao,$SqlAtualizar);

 return $ResultadoUpdate;
        
}


function updatUser($conexao,$docUsuario, $nomeUsuario, $login,$depUsuario,$pfUsuario,$tipoPerfil){

    $sqlUpate = "UPDATE usuario SET nome='$nomeUsuario', email='$login' ,departamento='$depUsuario' ,ativo='$pfUsuario', perfil='$tipoPerfil' where cpf='$docUsuario'";
    $resultUpdate =mysqli_query($conexao,$sqlUpate);
    
    if($resultUpdate > 0){
        header('location:../usuarios.php');
    
    }else {
    
        echo "Nada para Atualizar";
    }
    }