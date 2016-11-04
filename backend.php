<?php

//cont13
function conexao(){
	try{
		$con = new PDO('mysql:host=localhost;dbname=exercicio20', 'root', '');
	}catch(Exception $e){
		echo $e->getMessage();
	}
	return $con;
}

function executaQuery($sql){
	try{
		$con = conexao();
		$consulta = $con->prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}catch (Exception $e){
		echo $e->getMessage();
	}
}


function insertQuery($sql){
	try{
		$con = conexao();
		$consulta = $con->prepare($sql);
		$consulta->execute();
	}catch (Exception $e){
		echo $e->getMessage();
	}

}


?>
