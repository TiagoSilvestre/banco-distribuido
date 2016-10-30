<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
	
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
	$con = conexao();
	//$query = 'INSERT INTO pessoas(nomePessoa, Logradouros_idLogradouro, Bairros_idBairro, Cidades_idCidade, Estados_idEstado, Paises_idPais) VALUES ({})';
	
	$consulta = $con->prepare($sql);
	$consulta->execute();
	return $consulta->fetchAll();
}

function selectLogradouro(){

}

?>
