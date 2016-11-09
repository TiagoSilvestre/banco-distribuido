<?php
/**
 * Created by PhpStorm.
 * User: ts
 * Date: 09/11/2016
 * Time: 09:07
 */
require 'backend.php';

$codigo = $_POST['codigo'];

$sql = "SELECT * FROM pessoas WHERE idPessoa = {$codigo}";

$a = executaQuery($sql);

$retorno = array('id' => $a[0][0], 'nome' => $a[0][1], 'logradouro' => $a[0][2], 'bairro' => $a[0][3], 'cidade' => $a[0][4], 'estado' => $a[0][5], 'pais' => $a[0][6]);

//echo "<pre>";
//print_r($retorno);

$a = json_encode($retorno);
echo $a;