<?php

if(!empty($_FILES['foto']['name'])){
//local temporario onde foi realizado o upload da imagem
$origem = $_FILES['foto']['tmp_name'];

//cria um novo nome unico para a foto
$nome_foto = time().$_FILES['foto']['name'];

//local para onde o arquivo de upload vai ser movido
$destino = "../uploads/$nome_foto";

//move o arquivo de upload para a pasta destino
move_uploaded_file($origem, $destino);
}else{
    $nome_foto = "sem_foto.png";
}

