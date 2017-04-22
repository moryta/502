<?php

function salvar($nome,$telefone,$email)

{
  $obj = new SimpleXMLElement('listagem.xml', null, true);

  $aluno = $obj->addChild('aluno');

  $aluno->addChild('id', count($obj->aluno)+1);
  $aluno->addChild('nome', $nome);
  $aluno->addChild('email', $email);
  $aluno->addChild('telefone', $telefone);

  $obj->saveXML('listagem.xml');
}

salvar($_REQUEST['nome'],$_REQUEST['email'],$_REQUEST['telefone']);

header("Location: ../index.php");
exit();
