<?php
/**
 * User: Tiago Silvestre
 * Date: 31/10/2016
 * Time: 20:14
 */
require 'backend.php';

$tabela = $_POST['campo'];
$valor = $_POST['valor'];

$sql = "INSERT INTO {$tabela}(nome) VALUES('{$valor}')";

executaQuery($sql);
cadastroAuxRemoto($sql);

$sqlSel = "SELECT id FROM {$tabela} WHERE  nome = '{$valor}'";
$id = executaQuery($sqlSel);
$retorno = array('id' => $id[0][0]);

$a = json_encode($retorno);
echo $a;