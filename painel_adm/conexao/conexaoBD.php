<?php

	//conexão do Banco de Dados
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_commonraildocs';

	try{
		$conexaoBD = new PDO ("mysql:host=$host; dbname=$db", $user. $pass);
		$conexaoBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexaoBD->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	} catch (exception $e) {
		echo $e->getMessage();
		exit;
	}

?>