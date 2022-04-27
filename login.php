<?php

  INCLUDE __DIR__ . "./conexao.php";
  $clientArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  /*$sql = "SELECT email,senha FROM usuario where email Like {$clientArray["email"]} and senha like {$clientArray["senha"]}"
  . "VALUES (null,'{$clientArray["email"]}','{$clientArray["senha"]}', null, null)";
  */
  if($clientArray){
  if(in_array("",$clientArray)){
    echo "preencha todos os campos";  
  }else if(!filter_var($clientArray["email"],FILTER_VALIDATE_EMAIL)){
      echo "email inválido";
  } else {
    $sql = "SELECT email,senha FROM usuario where email Like '{$clientArray["email"]}' and senha like '{$clientArray["senha"]}'";
    $query = $conn->prepare($sql);
    $query->execute(); 
if($query->rowCount() == 1){
$row = $query->fetch();
echo "email  cadastrado";
}else{
echo "email ou senha não cadastrado";
}
    
  
  }
      $arrayEmail = "";
      $arraySenha = "";
  
}
 

  
?>
<!DOCTYPE html>
<html class="fundo-7">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./flexbox.css">
    </head>
    <body>
        <?php
$method ="POST";
        ?>
    <form name="post" action="./login.php" method=<?= $method ?> enctype="multypart/form-data" novalidate>
            <div class="cad">
                <p class="texto">Email:</p>  <input class="cadastro" type="email" name="email" value="<?=$arrayEmail; ?>" placeholder="Digite seu e-mail...">
                    <p class="texto">Senha:</p>  <input class="cadastro" type="password" name="senha" value="<?=$arraySenha; ?>" placeholder="Digite sua senha...">
                        <button class="botao"><p class="enviar">Enviar</p></button>
            </div>
    </form>
   
</body>
</html>