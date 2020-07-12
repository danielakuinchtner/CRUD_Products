<?php
require_once("include/conexao_banco.inc.php");
echo "Consultar " ;
/*
// seleciona a base de dados em que vamos trabalhar
//pg_select_db($usuario, $conn);
// cria a instrução SQL que vai selecionar os dados
//$query = sprintf("SELECT id, nome, descr, valor FROM produto ");
// executa a query
//$dados = pg_query($query, $con) or die(mysql_error());
// transforma os dados em um array
//$linha = pg_fetch_assoc($dados);
// calcula quantos dados retornaram
//$total = pg_num_rows($dados);



?>


<html>
    <head>
    <title>Consulta</title>
</head>
<body>
<?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>
            <p><?=$linha['nome']?> / <?=$linha['descr']?></p>
<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = pg_fetch_assoc($dados));
    // fim do if 
    }
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
pg_free_result($dados); */


?>

