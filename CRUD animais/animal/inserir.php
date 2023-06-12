<?php
   require_once "../login/controlar_acesso.php";
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   var_dump ($_POST);

   // Verifica se o nome, login e senha foram enviados do formulario de cadastro
   //if(isset($_POST['nome']) && isset($_POST['login']) && isset($_POST['senha'])){

      //verifica se o nome, login e senha foram enviado
      //do formulario de cadastro
      require_once "faz_upload.php";
      $nomedoanimal = $_POST['nomedoanimal'];
      $nomedodono = $_POST['nomedodono'];
      $raca = $_POST['raca'];
      $peso = $_POST['peso'];
      $idade = $_POST['idade'];
      $foto = $nome_foto;
//
      //cria uma variável com um comando SQL
      $SQL = "INSERT INTO `animal` (`nomedoanimal`, `nomedodono`, `raca`, `peso`, `idade`, foto) VALUES (?, ?, ?, ?, ?, ?);";
   
      //prepara o comando para ser executado no mysql
      $comando = $conexao->prepare($SQL);

      //faz a vinculação dos parâmetros ?, ?, ?
      $comando->bind_param("ssssss", $nomedoanimal, $nomedodono, $raca, $peso, $idade, $foto);

      //executa o comando
      $comando->execute();
  // }
   
   //volta para o formulário
   header("Location: index.php");

   







