<?php
include_once '../../DataRequest.php';

$dataRequest = new DataRequest();

$clientes = $dataRequest->dadosClientes('c');
$usuarios = $dataRequest->dadosUsuarios('c');
$fornecedores = $dataRequest->dadosFornecedores('c');

$resultado = array($clientes, $usuarios, $fornecedores);
$resultadoJson = json_encode($resultado);

echo $resultadoJson;