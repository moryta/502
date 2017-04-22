<?php

$file = fopen('texto.txt', 'r');

// echo fread($file, filesize('texto.text'));

// fclose($file);$x

while(($pedaco = fgets($file, 3)) !== false) {
    echo $pedaco;
    echo "<br>";
}

fclose($file);

// ------------------
$file = fopen('texto.txt', 'a+');
fwrite($file, "\n1231231231 Nova linha de conteudoasdasd");
fclose($file);

echo "<hr>";
echo file_get_contents('texto.txt');
echo "<hr>";
// ------------------
file_put_contents('texto.txt', 'HAHAHHA', FILE_APPEND);


//
//
