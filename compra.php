
<form name="post" method="<?= $method; ?>">
<input type="number" name="qtd" value="<?= $qtd; ?>">
<input type="submit" name="enviar">
</form>
<?php
  
$method = "Post";

$qtdPost = filter_input(INPUT_POST, "qtd", FILTER_DEFAULT);
function compra($qtdPost){
    
$qtdPost = $qtdPost*20.00;
    return  $qtdPost;
}
$total = compra($qtdPost);
echo $total;
var_dump($total);
?>
