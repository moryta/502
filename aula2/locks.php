<?php
$file = fopen('nomes.txt', 'a+');

if(flock($file, LOCK_EX | LOCK_NB)){
    fwrite($file, "\nTrabalhando com Locks");
    sleep(20);
    flock($file, LOCK_UN);
}else{
    echo '<h1>Aguarde Arquivo Bloqueado Temporariamente</h1>';
}
