<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Categoria</title>
</head>
<body>
    <?php
         /*1- chamando o arquivo de conexão*/
    require "conexao.php";
    /*2- Pegando os dados vindos do formulario*/
     $n = $_POST["nome"];

    /* 3 - criando o comando sql para inserção do registro*/
    $comandoSql="insert into TBCATEGORIA(NOMECATE) values('$n');";

    /* 4 - executando o comando sql */
    $resultado= mysqli_query($con,$comandoSql);

    /* 5 - verificando se o comando sql foi executado */
    if($resultado==true){
    echo "<script> alert('Cadastrado com Sucesso');
          setTimeout(function(){
            window.location.href='lista_categoria_tabela.php'
          },2000)
    </script>";
    }
    else{
    echo "<script> alert('Erro no cadastro');
          setTimeout(function(){
            window.location.href='frm_cadastra_categoria.php'
          },2000);
    </script>";
    }

    ?>
</body>
</html>