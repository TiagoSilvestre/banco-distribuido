<?php
/**
 * User: Tiago Silvestre
 * Date: 31/10/2016
 * Time: 20:14
 */
require 'backend.php';

$tabela = explode(" ", $_POST['campo']);
$valor = $_POST['valor'];

$sql = "INSERT INTO {$tabela[1]}(nome) VALUES('{$valor}')";

executaQuery($sql);

echo "Cadastrado com sucesso!";
