<?php
    $relatorios = array("Cliente", "Faturamento", "Produtos");

    $relatoriosJson = json_encode($relatorios);
    echo $relatoriosJson;
