<?php
// $xml = file_get_contents(cursos.xml);
// $obj = SimpleXMLElement($xml);

$obj = new SimpleXMLElement('cursos.xml', null, true);
echo "<pre>";

foreach ($obj->curso as $curso) {
    echo $curso->nome . '<br>';
}
