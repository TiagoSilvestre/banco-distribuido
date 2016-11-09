<?php
/**
 * User: Tiago Silvestre
 * Date: 04/11/2016
 * Time: 14:23
 */
require 'backend.php';

//variaveis do POST
$nome = $_POST["nomePessoa"];
$cod = $_POST["codigo"];
$logradouro = $_POST["Logradouros_idLogradouro"];
$bairro = $_POST["Bairros_idBairro"];
$cidade = $_POST["Cidades_idCidade"];
$estado = $_POST["Estados_idEstado"];
$pais = $_POST["Paises_idPais"];
$op = $_POST["operacao"];


if($op == 'Incluir'){
    $queryLocal = "INSERT INTO pessoas(nomePessoa, Logradouros_idLogradouro, Bairros_idBairro, Cidades_idCidade, Estados_idEstado, Paises_idPais)
    VALUES ('{$nome}', $logradouro, $bairro, $cidade, $estado, $pais)";
    $operacao = 'INSERT';

    try{
        insertQuery($queryLocal, $operacao);
        echo "Cadastrado com sucesso<br><br><a href='index.php'>Voltar</a>";
    }catch (Exception $e){
        echo $e->getMessage();
    }
}

if($op == 'Alterar'){
    $sqlUpdate = "UPDATE pessoas SET nomePessoa = '{$nome}', Logradouros_idLogradouro = $logradouro, Bairros_idBairro = $bairro, Cidades_idCidade = $cidade, Estados_idEstado = $estado, Paises_idPais = $pais WHERE idPessoa = $cod";
    $operacao = 'UPDATE';

    try{
        insertQuery($sqlUpdate, $operacao, $cod);
        echo "Atualizado com sucesso<br><br><a href='index.php'>Voltar</a>";
    }catch (Exception $e){
        echo $e->getMessage();
    }
}