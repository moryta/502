<?php

$file = new SplFileObject('texto.txt');

foreach ($file as $linha) {
    echo "$linha<br>";
}

$file->fwrite('HAHAHAHA');
echo $file->fread(5);
