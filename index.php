<?php 
	error_reporting (E_ERROR);
  session_start();
  session_unset();
  $msg_alert = "";

  $id_erro = $_REQUEST['id_erro'];

  if (strlen($id_erro))
  {
    if ($id_erro == 0)
      $msg_alert = "Erro ao realizar o login.";
    else
      $msg_alert = "Login e/ou Senha incorretos.";
  }
?>
<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <title>Form</title>
  </head>
  <body>  
    <div class="container">      <br>   
    <h1>Login</h1>   
      <form method="POST" action="exe_login.php">
        <input type="number" id="cd_usuario" name="cd_usuario" class="form-control" placeholder="Registration" required/>
        <input type="password" id="ds_senha" name="ds_senha" class="form-control" placeholder="Password" required /><br>
        <button type="submit">Enter</button>
      </form>         <br>

    <div>
      <a href="fil_cadastro_conta.php">Register</a>
    </div>	 	  
    </div>
    
  </body>
</html>
