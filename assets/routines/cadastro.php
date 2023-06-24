<?php
    $cadastro = array("Cliente", "Fornecedor", "Perfil de Acesso", "Produtos", "Usuários");

    $cadastroJson = json_encode($cadastro);
    echo $cadastroJson;
