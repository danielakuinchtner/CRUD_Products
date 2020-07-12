<?php
require_once("include/conexao_banco.inc.php");

?>

<!DOCTYPE html>
<html>
  <head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
  </head>
  <body>  
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
   <center><h2>Choose an optin below:</h2> </center>
     <form method="" action=""><br>
       <a href="fil_cadastro_produto.php" class="btn btn-success">Register Product</a><br><br>
       <a href="fil_excluir_produto.php" class="btn btn-danger">Delete Product</a><br><br>
      <!-- <a href="prod_consulta.php" class="btn btn-primary">Consultar Lista de Produtos</a><br>-->
      <a href="fil_consulta_produto.php" class="btn btn-primary">Consult List of Products</a><br>
     </form>
		<?php echo "<div class=\"{$color}\">{$msg_alert}</div>"; ?>
		
		<br>
      <a href="index.php" class="btn btn-default">Exit account</a>
   
   </div>
   <br><br>
   
  </body>
</html>