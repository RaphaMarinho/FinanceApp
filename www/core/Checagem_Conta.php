<?php
	
include('dados_conexao.php');

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=utf-8"); 
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");

	try {
		
		$conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
		
		$consulta = $conecta->prepare('');
		$consulta->execute(array());  
		$resultadoDaConsulta = $consulta->fetchAll();
 
		$StringJson = "[";
 
	if ( count($resultadoDaConsulta) ) {
		foreach($resultadoDaConsulta as $registro) {
 
			if ($StringJson != "["){$StringJson .= ",";}
			
			$StringJson .= '{"de":"' . $registro['de']  . '",';
			$StringJson .= '"para":"' . $registro['para']  . '",';	
			$StringJson .= '"msg":"' . $registro['msg'] . '"}';
		}  
		
		echo $StringJson . "]"; // Exibe o vettor JSON
  } 
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage(); // opcional, apenas para teste
}
?>