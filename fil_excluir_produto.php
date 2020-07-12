<?php 
  include "include/conexao_banco.inc.php";
  
  $msg_alert = "";
  $id_erro = $_REQUEST['id_erro'];

  if (strlen($id_erro))
  {
      
    if ($id_erro == 1)
  {
    $color = 'alert-danger';
      $msg_alert = "Produto não encontrado!";
  }
  
    elseif ($id_erro == 2)
    {
      $msg_alert = "Exclusão concluído com sucesso!";
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
    <title>Delete Product</title>
  </head>
  <body>  
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
   <center><h1>Delete Product</h1> 
     <form method="POST" action="prod_excluir.php"><br>
       <input type="number"     id="id"     name="id"     class="form-control" placeholder="ID"        required autofocus /><br>
       <button type="submit" class="btn btn-danger">Delete</button><br>
     </form>

    <?php 

    echo "<div class=\"{$color}\">{$msg_alert}</div>"; ?>
    </center>
    <div>
      <a href="menu.php" class="btn btn-primary">Return</a>
      <a href="index.php" class="btn btn-default">Exit account</a>
   </div>
   </div>
   <br><br>
   
  </body>
</html>
