<?php
include_once '../../DataRequest.php';

$dataRequest = new DataRequest();

$fornecedores = $dataRequest->dadosFornecedores('#');
$resultadoJson = json_encode($fornecedores);

echo $resultadoJson;