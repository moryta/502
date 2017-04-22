<?php

function excluir($i)

{
  $alunos = new SimpleXMLElement('listagem.xml', null, true);

  unset($alunos->aluno[intval($i)]);
  $alunos->saveXML('listagem.xml');
}

excluir($_REQUEST['i']);

header("Location: ../index.php");
exit();
