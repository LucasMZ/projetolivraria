
<?php

   INCLUDE __DIR__ . "./conexao.php";
    $clientArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if($clientArray){

    
    $sql = "INSERT INTO usuario "
    . "VALUES (null, '{$clientArray["nome"]}','{$clientArray["email"]}','{$clientArray["senha"]}', null, null)";
    
    $query = $conn->prepare($sql);
    $query->execute();
    }
?>

<!DOCTYPE html>
<html class="fundo-7">
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
    <link rel="stylesheet" type="text/css" href="./flexbox.css">
    </head>
    <body>
        <?php
        $method = "POST";
        $nome = "";
        $email = "";
        $senha = "";
        ?>
        <form name="post" action="Cadastro.php" method=<?= $method ?> enctype="multypart/form-data" novalidate>
            <div class="cad">
                 <p class="texto">Nome:</p>   <input class="cadastro" type="text" name="nome" value="<?=$nome; ?>" placeholder="Digite seu nome...">
                    <p class="texto">Email:</p>  <input class="cadastro" type="email" name="email" value="<?=$email; ?>" placeholder="Digite seu e-mail...">
                        <p class="texto">Senha:</p>  <input class="cadastro" type="password" name="senha" value="<?=$senha; ?>" placeholder="Digite sua senha...">
                            <button class="botao"><p class="enviar">Enviar</p></button>
            </div>
        </form>
    </body>
</html>
