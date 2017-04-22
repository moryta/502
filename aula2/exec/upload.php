<?php

if ($_FILES) {
    $nome_temporario = $_FILES['arq']['tmp_name'];
    $novo_nome = md5($_FILES['arq']['name']);

    if (move_uploaded_file($nome_temporario, $novo_nome)) {
        $log = date('[d-m-Y H:i:s]') .
               " Arquivo {$_FILES['arq']['name']} adicionado\n";
        file_put_contents('log', $log, FILE_APPEND);
        echo '<h1>Upload realizado com sucesso!</h1>';
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="" method="post"
        enctype="multipart/form-data" >
            <input type="file" name="arq" />
            <input type="submit" value="enviar arquivo"/>
        </form>
    </body>
</html>
