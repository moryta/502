<?php

$parametros = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-type: application/json',
        'content'=> json_encode(array(
            'id' => 10,
            'nome' => 'Notebook',
            'preco' => 3500
        ))
    )
);

$contexto = stream_context_create($parametros);
$server = "http://localhost/502_sabado/page.php";
$retorno = file_get_contents($server, 0, $contexto);

echo $retorno;
