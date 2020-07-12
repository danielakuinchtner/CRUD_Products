<?php
  session_start();
  include("include/conexao_banco.inc.php");

  var_dump($_REQUEST);
  $senha = md5($_REQUEST['ds_senha']);
  echo $_REQUEST['ds_senha'];
  echo $_REQUEST['cd_usuario'];
  
  $sql = "SELECT * 
            FROM usuario 
           WHERE ds_senha   = '{$senha}'
             AND cd_usuario = {$_REQUEST['cd_usuario']}";

			 echo $senha;
  if ($result = pg_query($conn, $sql))
  {
    if (pg_num_rows($result) > 0) 
    {
      $row = pg_fetch_array($result);

      $_SESSION["s_cd_usuario"] = $_REQUEST["cd_usuario"];
      $_SESSION["s_nm_usuario"] = $row["nm_usuario"];
      echo "<script>window.location.href='menu.php?';</script>";   
    }
    else
    {
      echo "<script>window.location.href='index.php?id_erro=1';</script>";
      die();
    }
  }
  else 
  {
    echo "<script>window.location.href='index.php?id_erro=0';</script>";
    die();
  }
?>