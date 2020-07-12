<?php 
  include "include/conexao_banco.inc.php";
  
  $msg_alert = "";
  $id_erro = $_REQUEST['id_erro'];

  if (strlen($id_erro))
  {
    
    if ($id_erro == 2)
    {
      $msg_alert = "Consulta concluída com sucesso!";
      $color = 'alert-success';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consult Product List</title>
  </head>
  <body>  
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
   <center><h2>Product List</h2> </center><br>

   <?php
    require_once("include/conexao_banco.inc.php");

    $query = "SELECT * FROM produto ORDER BY id ";

    $result = pg_query($conn, $query);

    $i=0;
    while($conn = pg_fetch_assoc($result)) {
      
         $var1 = "ID: " .$conn['id'] . "  "; 
         $var2 = "Name: ".$conn['nome']." ";
         $var3 = "Description: ".$conn['descr'] . "  ";
         $var4 = "Value: $ ".$conn['valor']." <br> ";
       

  ?>

      <div class="list-group">
        <a  class="list-group-item"><?php print $var1?></a>
        <a class="list-group-item"><?php print $var2?></a>
        <a  class="list-group-item"><?php print $var3?></a>
        <a  class="list-group-item"><?php print $var4?></a>
      </div>

<?php
    }
    $i=$i+1;

    echo "<div class=\"{$color}\">{$msg_alert}</div>"; 
      
    //echo "<script>window.location.href='fil_consulta_produto.php?id_erro=2';</script>";

    pg_close($conn);
 ?>

    
    <div>
      <a href="menu.php" class="btn btn-primary">Return</a>
      <a href="index.php" class="btn btn-default">Exit account</a>
   </div>
   </div>
   <br><br>
   
  </body>
</html>