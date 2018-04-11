<?php

header('Content-Type: text/html; charset=utf-8');

echo "<h1>processamento dos arquivos</h1>";
echo "<a href='index.php'>voltar</a>";


$uploaddir = './data/';

//$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);


foreach ($_FILES["userfile"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["userfile"]["tmp_name"][$key];
        $name = $_FILES["userfile"]["name"][$key];

        if(!is_dir ( $uploaddir )) { // se diretorio nao existe
            if(!mkdir($uploaddir,755)) // tenta criar
                throw new RuntimeException('Diretório para upload não existe no servidor e Não foi possível criá-lo.');
        }

        if (move_uploaded_file($tmp_name, $uploaddir . $name)) {  // tentar mover o arquivo
            echo "Arquivo '$name' válido e enviado com sucesso.\n";
        } else
            throw new RuntimeException('Não foi possível gravar arquivo no servidor.');

    }
}

