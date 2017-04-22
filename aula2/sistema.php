<?php

touch('nomes.txt');

// chown('nomes.txt', 'gabriel');
chmod('nomes.txt', 0666);

echo file_get_contents('nomes.txt');
// copy('nomes.txt', '/tmp/sobrenomes.txt');
// unlink('nomes.txt');
$retorno = glob('*.txt');

print_r($retorno);
