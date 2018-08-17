
<?php


    include('dados_conexao.php');

    try { 
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		
		$query = "INSERT INTO Tabela_Contas (1, 2, 3)
                  VALUES ('1', '2', '3');";
		
		echo $query ;
		$grava = $conecta->prepare($query);
		$grava->execute(array()); 
        
         //echo("<script> alert('gravado com sucesso - PHP')</script>");
 
	} catch(PDOException $e) { // casso retorne erro
		echo('Deu erro: ' . $e->getMessage()); 
	}
?>

