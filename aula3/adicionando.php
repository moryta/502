<?php

$obj = new SimpleXMLElement('cursos.xml', null, true);

$curso = $obj->addChild('curso');

$curso->addChild('id', '501');
$curso->addChild('nome', 'PHP Orientado a Objetos');
$curso->addChild('categoria', 'Desenvolvimento');
$capitulos = $curso->addChild('capitulos');

$capitulos->addChild('capitulo', 'Introdução');

$obj->saveXML('cursos.xml');
