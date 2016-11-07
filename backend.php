<?php
//cont13

//CONEXAO LOCAL
function conexao(){
	try{
		$con = new PDO('mysql:host=localhost;dbname=exercicio20', 'root', '');
	}catch(Exception $e){
		echo $e->getMessage();
	}
	return $con;
}

//CONEXAO REMOTA 1
function conexao_remota1(){
    try{
        $con = new PDO('mysql:host=172.16.82.9;dbname=exercicio20', 'root', '');
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
	    //banco local
		$con = conexao();
		$consulta = $con->prepare($sql);
		$consulta->execute();

        //conexao remota
        /*
        $con_remota = conexao_remota1();
        $consulta_remota = $con_remota->prepare($sql);
        $consulta_remota->execute();
        */
	}catch (Exception $e){
		echo $e->getMessage();
	}
}


?>
