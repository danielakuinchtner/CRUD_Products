<?php
	include("include/conexao_banco.inc.php");

	if ($_REQUEST["ds_senha"] != $_REQUEST["ds_senha_c"])
	{
		echo "<script>window.location.href='fil_cadastro_conta.php?id_erro=3';</script>";
		die();
	}

	$sql = "SELECT cd_usuario
		        FROM usuario 
		       WHERE cd_usuario = {$_REQUEST['cd_usuario']}";

	if ($result = pg_query($conn, $sql))
	{
	  if (pg_num_rows($result) > 0) 
	  {
		  echo "<script>window.location.href='fil_cadastro_conta.php?id_erro=1';</script>";
			die();
	  }
	  else
	  {
			$values = array("nm_usuario"  => $_REQUEST['nm_usuario'],
					          	"cd_usuario"  => $_REQUEST['cd_usuario'],
					    	      "ds_email"    => $_REQUEST['ds_email'],
					    	      "ds_senha"    => md5($_REQUEST['ds_senha']),
					   	 	      "dt_cadastro" => date("Y-m-d H:i:s"));

			$res = pg_insert($conn, 'usuario', $values);

			if ($res) 
			{
			  echo "<script>window.location.href='fil_cadastro_conta.php?id_erro=2';</script>";
				die();
			}
			else 
			{
			  echo "<script>window.location.href='fil_cadastro_conta.php?id_erro=0';</script>";
				die();
			}
	  }
	}
?>

