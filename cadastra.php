<?php
/**
 * Created by PhpStorm.
 * User: ts
 * Date: 04/11/2016
 * Time: 14:23
 */
require 'backend.php';


//variaveis do POST
$logradouro = $_POST["Logradouros_idLogradouro"];
$bairro = $_POST["Bairros_idBairro"];
$cidade = $_POST["Cidades_idCidade"];
$estado = $_POST["Estados_idEstado"];
$pais = $_POST["Paises_idPais"];
$op = $_POST["operacao"];


//PEGA A CHAVE ESTRANGEIRA logradouro
$queryLogra = "SELECT idLogradouro FROM logradouros WHERE nome = '{$logradouro}'";
$idLogra = executaQuery($queryLogra);

//PEGA A CHAVE ESTRANGEIRA bairro
$queryBairro = "SELECT idBairro FROM bairros WHERE nome = '{$bairro}'";
$idBairro = executaQuery($queryBairro);

//PEGA A CHAVE ESTRANGEIRA cidade
$queryCidade = "SELECT idCidade FROM cidades WHERE nome = '{$cidade}'";
$idCidade = executaQuery($queryCidade);

//PEGA A CHAVE ESTRANGEIRA estado
$queryEstado = "SELECT idEstado FROM estados WHERE nome = '{$estado}'";
$idEstado = executaQuery($queryEstado);

//PEGA A CHAVE ESTRANGEIRA pais
$queryPais = "SELECT idPais FROM paises WHERE nome = '{$pais}'";
$idPais = executaQuery($queryPais);




echo "<pre>";
print_r($_POST);


echo "<br><br><br><br><br><pre>";
print_r('Logradouro: '.$idLogra[0][0]);

echo "<br><br><pre>";
print_r('Bairro: '.$idBairro[0][0]);

echo "<br><br><pre>";
print_r('Cidade: '.$idCidade[0][0]);

echo "<br><br><pre>";
print_r('Estado: '.$idEstado[0][0]);

echo "<br><br><pre>";
print_r('Pais: '.$idPais[0][0]);



