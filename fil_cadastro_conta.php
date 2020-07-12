<?php 
	include "include/conexao_banco.inc.php";
	
  $msg_alert = "";
  $id_erro = $_REQUEST['id_erro'];

  if (strlen($id_erro))
  {
    if ($id_erro == 0)
	{
		$color = 'alert-danger';
      $msg_alert = "Erro ao realizar cadastro.";
	}
	
    elseif ($id_erro == 1)
	{
		$color = 'alert-warning';
      $msg_alert = "Matrícula já em uso!";
	}
	
    elseif ($id_erro == 2)
    {
      $msg_alert = "Cadastro Concluído com Sucesso!";
      $color = 'alert-success';
    }
    elseif($id_erro == 3)
      $msg_alert = "Senha inválida!";
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
    <title>Register User</title>
  </head>
  <body>  
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
   <center><h1>Register User</h1> 
     <form method="POST" action="exe_cadastro_conta.php"><br>
       <input type="text"     id="nm_usuario" name="nm_usuario" class="form-control" placeholder="Name"   required autofocus />
       <input type="email"    id="ds_email"   name="ds_email"   class="form-control" placeholder="Email"          required autofocus />
       <input type="number"   id="cd_usuario" name="cd_usuario" class="form-control" placeholder="Registration"       required autofocus />
       <input type="password" id="ds_senha"   name="ds_senha"   class="form-control" placeholder="Password"           required />
       <input type="password" id="ds_senha_c" name="ds_senha_c" class="form-control" placeholder="Confirm password" required /><br>
       <button type="submit" class="btn btn-success">Register User</button><br><br>
     </form>
		<?php echo "<div class=\"{$color}\">{$msg_alert}</div>"; ?>
		</center><br>
		<div>
      <a href="index.php" class="btn btn-primary">Return</a>
   </div>
   </div>
   <br><br>
   
  </body>
</html>
