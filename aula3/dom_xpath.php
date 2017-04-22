<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$objDomXPATH = new DOMXPath($objDom);

$retorno = $objDomXPATH->query("/cursos/curso[@versao='5.4']");

print_r($retorno);
