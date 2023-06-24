<?php
include_once '../../DataRequest.php';

$dataRequest = new DataRequest();

$clientes = $dataRequest->dadosClientes('#');
$resultadoJson = json_encode($clientes);

echo $resultadoJson;