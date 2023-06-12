<?php
   require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $codigo = $_POST['codigo'];
   $nomedoanimal = $_POST['nomedoanimal'];
   $nomedodono = $_POST['nomedodono'];
   $raca = $_POST['raca'];
   $peso = $_POST['peso'];
   $idade = $_POST['idade'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `animal` SET `nomedoanimal`= ?, `nomedodono`= ?, `raca`= ?, `peso`= ? `idade`=? WHERE  `codigo`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssssi", $nomedoanimal, $nomedodono, $raca, $peso, $idade, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







