<?php

$host="localhost";
$port=3306;
$user="root";
$password="";
$dbname="raruna";
$dsn="mysql:host=localhost;dbname=$dbname";

/*$con = new mysqli($host, $user, $password, $dbname, $port)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();*/


try{
	$conexao = new PDO($dsn, $login, $password);

	$stmt = $conexao->query($query);
	$lista = $stmt->fetchAll();
	
	echo '<pre>';
	print_r($lista);
	echo '</pre>';
	

}catch(PDOException $x){
	echo 'Error'.$x->getCode().' Mensagem: '.$x->getMessage();
	//registrar erro
}
