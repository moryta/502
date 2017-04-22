<?php

$obj = new SimpleXMLElement('cursos.xml', null, true);
$retorno = $obj->xpath("/cursos/curso[@versao='5.4']");

print_r($retorno);
