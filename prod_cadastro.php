<?php
require_once("include/conexao_banco.inc.php");
	
	$sql = "SELECT id
		       FROM produto 
		       WHERE id = {$_REQUEST['id']}";
    


	if ($result = pg_query($conn, $sql))
	{
		

	  if (pg_num_rows($result) > 0) 
	  {
	  	

		  echo "<script>window.location.href='fil_cadastro_produto.php?id_erro=1';</script>";
			die();
	  }
	  else
	  { 
	  	$result = pg_query($conn, $sql);
	  		  
			$values = array("id"  => $_REQUEST['id'],
					          	"nome"  => $_REQUEST['nome'],
					    	      "descr"    => $_REQUEST['descr'],
					    	      "valor"    => $_REQUEST['valor']);

			$res = pg_insert($conn, 'produto', $values);

			if ($res) 
			{
			  echo "<script>window.location.href='fil_cadastro_produto.php?id_erro=2';</script>";
				die();
			}
			else 
			{
			  echo "<script>window.location.href='fil_cadastro_produto.php?id_erro=0';</script>";
				die();
			}
	  }
	}


?>