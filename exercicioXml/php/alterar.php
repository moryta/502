<?php

function alterar($i,$nome,$telefone,$email)

{
  $alunos = new SimpleXMLElement('listagem.xml', null, true);

  $alunos->aluno[intval($i)]->nome = $nome;
  $alunos->aluno[intval($i)]->email = $email;
  $alunos->aluno[intval($i)]->telefone = $telefone;
  $alunos->saveXML('listagem.xml');
}

alterar($_REQUEST['i'],$_REQUEST['nome'],$_REQUEST['email'],$_REQUEST['telefone']);

header("Location: ../index.php");
exit();
