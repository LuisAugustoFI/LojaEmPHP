<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    /*1- chamando o arquivo de conexão*/
    require "conexao.php";

    /*2- pegando os dados vindos do formulario e armazenando em variavéis*/
    $id=$_POST["id"];
    $n=$_POST["nome"];

    /*3- criando o comando sql para alteração do registro*/
    $comando_sql="update TBCATEGORIA set NOMECATE='$n' where IDCATE=$id";
        
    /*4- executando o comando sql */
    $resultado=mysqli_query($con,$comando_sql);

    /*5- verificando se o comando sql foi executado*/
    if($resultado==true)
       echo "<script> alert('alterado com sucesso');
             setTimeout(function(){
               window.location.href='lista_categoria_tabela.php'
          },2000)
       </script>";
    else
    echo "<script> alert('Erro na alteração');
          setTimeout(function(){
            window.location.href='lista_categoria_tabela.php'
          },2000)
    </script>";
    ?>
</body>
</html>