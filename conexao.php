<?php
  $host = 'mysql:dbname=bdlivraria2;host=localhost'; // atenção para o nome do banco de dados
  $user = 'root';
  $password = '';
try{
 $conn = new PDO($host,$user,$password);
}catch(Exception $exception){
    var_dump($exception);
}
   if($host==true){
       echo "ta funcionando";
   }
  /* $sql = "SELECT nome From usuario";
  
   $query = $conn->prepare($sql);
   $query->execute();
 */
?>



