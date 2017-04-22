<?php

$dom = new DOMDocument();
$dom->load('cursos.xml');

// $curso = $dom->createElement('curso');
// $curso->appendChild($dom->createElement('nome', 'PHP Enterprise'));
// $curso->appendChild($dom->createElement('categoria', 'Dese nvolvimento'));
//
// $capitulos = $dom->createElement('capitulos');
// $capitulos->appendChild($dom->createElement('capitulo', 'Introducao'));
// $curso->appendChild($capitulos);
//
// $cursos = $dom->getElementsByTagName('cursos');
// $cursos->item(0)->appendChild($curso);

// $nome = $dom->getElementsByTagName('nome');
//
// $nome->item(0)->parentNode->removeChild($nome->item(0));

$curso = $dom->getElementsByTagName('curso');
echo $curso->item(0)->setAttribute('lancamento', '2015');
echo $curso->item(0)->getAttribute('versao');

header('content-type:application/xml');
echo  $dom->saveXML();
//
// $dom->save('cursos.xml');
