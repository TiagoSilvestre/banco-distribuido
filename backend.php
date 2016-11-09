<?php

/********************     CONEXOES COM OS BANCOS     ********************/

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
        $con = new PDO('mysql:host=192.168.25.234;dbname=exercicio20', 'ts-PC', 'admin');
    }catch(Exception $e){
        echo $e->getMessage();
    }
    return $con;
}

/********************     CHAMADAS AS FUNÇÕES     ********************/

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

function cadastroAuxRemoto($sql){
	try{
		$con = conexao_remota1();
		$consulta = $con->prepare($sql);
		$consulta->execute();
	}catch (Exception $e){
		echo $e->getMessage();
	}
}

function insertQuery($sql, $operacao, $id = null){
	try{
		$aleatorio = rand(0, 1);
		echo "<script>alert('Selecionando banco randomicamente')</script>";
		if($aleatorio == 0) {
			//Primeiro em banco local
			insertBancoLocal($sql);
			insertMovimento($aleatorio, $operacao, $id);
			insertBancoRemoto1($sql);
		}elseif ($aleatorio == 1) {
			//primeiro em banco remoto 1
			insertBancoRemoto1($sql);
			insertBancoLocal($sql);
			insertMovimento($aleatorio, $operacao, $id);
		}elseif ($aleatorio == 2){
			//conexao remoto 2
			echo "cadastro no banco 2";
		}
	}catch (Exception $e){
		echo $e->getMessage();
	}
}

/********************     INSERE BANCOS RANDOMICOS     ********************/

function insertBancoLocal($sql, $mov = null){
	if(!$mov == 'teste'){
		echo "<script>alert('Cadastrando no banco local')</script>";
	}
	$con = conexao();
	$consulta = $con->prepare($sql);
	$consulta->execute();
}

function insertBancoRemoto1($sql){
	echo "<script>alert('Cadastrando no banco Remoto 1')</script>";
	$con_remota = conexao_remota1();
	$consulta_remota = $con_remota->prepare($sql);
	$consulta_remota->execute();
}

/********************     CADASTRO DE MOVIMENTO     ********************/

function insertMovimento($banco, $operacao, $id = null){
	echo "<script>alert('Gravando em Movimentos')</script>";
	if($operacao == "INSERT"){
		$sqlPessoa = "SELECT `idPessoa` FROM `pessoas` WHERE `idPessoa` = (select max(idPessoa) from pessoas)";
		$idPessoa = executaQuery($sqlPessoa);
		$id = $idPessoa[0][0];
	}
	$sql = "INSERT INTO movimentos(OperacaoMovimento, siteMovimento, dataMovimento, Pessoas_idPessoa) VALUES ('{$operacao}',{$banco}, NOW(), $id)";
	$mov = 'teste';
	insertBancoLocal($sql, $mov);
}

?>