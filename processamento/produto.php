<?php
session_start();
require '../Configuracoes/conexao.php';
require '../Configuracoes/funcoes.php';


//Verificação da Sessão do Usuário no Sistema
if (empty($_SESSION['email'])) {

    header('location:..\index.html');
}

//Aqui o sistema recebe o codigo  do produto para editar
$CodigoProduto = $_GET['id'];

//Aqui o sistema seleciona o produto conforme o código.
$Produto = EditarProduto($conexao, $CodigoProduto);



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
    <div class="container ">
        <form class="row g-3" method="POST" action="atualizar-produto.php">

            <div class="col-md-1 text-center">
                <label for="InputFormulario" class="form-label text-uppercase text-center">Código</label>
                <input class="form-control form-control-sm text-center" type="text" class="form-control" id="" name="codigo" value="<?php echo $Produto[0]['codigo']; ?>" readonly>
            </div>
            <div class="col-md-3 text-center">
                <label for="InputFormulario" class="form-label text-uppercase  text-center">Nome</label>
                <input class="form-control form-control-sm text-center" type="text" class="form-control" name="NomeProduto" value="<?php echo $Produto[0]['nome']; ?>">
            </div>

            <div class="col-md-3 text-center">
                <label for="InputFormulario" class="form-label text-uppercase text-center">Tamanho</label>
                <input class="form-control form-control-sm text-center" type="text" class="form-control" id="formGroupExampleInput" name="Tamanho" value="<?php echo $Produto[0]['tamanho']; ?>">
            </div>

            <div class="col-md-3 text-center">
                <label for="InputFormulario" class="form-label text-uppercase ">Quantidade</label>
                <input class="form-control form-control-sm text-center" type="text" class="form-control" id="formGroupExampleInput" name="qtd" value="<?php echo $Produto[0]['quantidade']; ?>">
            </div>
            <div class="col-md-12 text-center ">
                <label for="InputFormulario" class="form-label text-uppercase ">Descrição</label>
                <input class="form-control form-control-sm text-center" type="text" class="form-control" id="formGroupExampleInput" name="DescProduto" value="<?php echo $Produto[0]['composicao']; ?>">
            </div>
            <div class="col-md-12 ">
            <input class="btn btn-primary" type="submit" value="Salvar">
            </div>
            </form>


    </div>

</body>



</html>