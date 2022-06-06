<?php
/**
 * Script PHP para efetuar uma conexão
 * com o Banco de Dados MySQL utilizando
 * PDO em um servidor LOCALHOST (127.0.0.1)
 */

// Cuidados Rede Wifi, Hospedagem, Endereço IP, DNS
/*$servername = "localhost";
$dbname 	= "378186";
$username 	= "378186";
$password 	= "172839";

try {
	// Conexão com SGDB MySQL
	$pdo = new PDO(
		"mysql:host=$servername;dbname=$dbname",
		$username,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		     //mysqli_set_charset($pdo,"utf8");
} catch (PDOException $e) {
	// Cuidado para não expor dados de acesso
//	echo "<pre>" . $e . "</pre>";
	die("Lamento, algo não está funcionando 100% (DB)");
	
}
*/

	$con =new PDO('mysql:host=localhost; dbname=378186','378186','172839');