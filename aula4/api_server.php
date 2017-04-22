<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
  case 'GET':
      header('HTTP/1.1 202');//exemplos de status da API
      echo json_encode([
        'Meu json' => 'Conteudo GET - '.$_REQUEST['id']
      ]);
    break;

  case 'POST':
      header('HTTP/1.1 200');
      echo json_encode([
        'Meu json' => 'Conteudo POST - '.$_REQUEST['id']
      ]);
    break;

  default:
    # code...
    break;
}
