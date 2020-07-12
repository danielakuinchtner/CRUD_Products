
 <?php
require_once("include/conexao_banco.inc.php");


$del = "DELETE FROM produto WHERE ID =".$_POST['id'];

?>


<!DOCTYPE html>
<html>
  <head>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excluir Produto</title>
  </head>
  <body>  
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " ><br>
  
 <?php
 	$delete = pg_query($del) 
	or die('Erro ao deletar!');

	//if($delete)
		echo"Exclusão concluída com sucesso!";
	//else{
	//	echo"Produto não encontrado!";die();
	//}

?>
	<br><br>
    <div>
      <a href="menu.php" class="btn btn-primary">Return</a>
      <a href="index.php" class="btn btn-default">Exit account</a>
   </div>
   </div>
   <br><br>
   
  </body>
</html>
