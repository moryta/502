<?php

$obj = new SimpleXMLElement('cursos.xml', null, true);

unset($obj->curso[1]);
