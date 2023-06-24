<?php
include_once '../../DataRequest.php';

$dataRequest = new DataRequest();

$usuarios = $dataRequest->dadosUsuarios('#');
$resultadoJson = json_encode($usuarios);

echo $resultadoJson;