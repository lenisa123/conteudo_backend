<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT distinct categoria FROM noticia";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultado
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $categorias = [];
   //fetch_assoc
   while ($categoria = $resultados->fetch_object()){
      $categorias[] = $noticia;
   }
   