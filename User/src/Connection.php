<?php

function openConnection(){
	$host="localhost";
	$port=3306;
	$user="root";
	$password="";
	$dbname="raruna";
	$dsn="mysql:host=$host;dbname=$dbname";
	try{
		$connection = new PDO($dsn, $user, $password);
		return $connection;
	
	}catch(PDOException $x){
		die ('Error'.$x->getCode().' Mensagem: '.$x->getMessage());
		//registrar erro
	}
}
