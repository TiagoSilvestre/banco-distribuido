<?php

	

function conexao(){
	try{
		$con = new PDO('mysql:host=localhost;dbname=exercicio20', 'root', 'a1b2c3d4');
	}catch(Exception $e){
		echo $e->getMessage();
	}
	return $con;
}


function inserir(){
	$con = conexao();
	$query = 'INSERT INTO pessoas(nomePessoa, Logradouros_idLogradouro, Bairros_idBairro, Cidades_idCidade, Estados_idEstado, Paises_idPais) VALUES ({})';
	
	$con->prepare($query);
	
}


?>
