<?php

//$obj = new SimpleXMLElement('listagem.xml', null, true);
$obj = new SimpleXMLElement('php/listagem.xml', null, true);
$retorno = $obj->xpath("/alunos/aluno[id=".$_REQUEST['id']."]");
$retorno[0]->nome;
print_r($retorno);
