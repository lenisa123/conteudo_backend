<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM noticia where categoria like ?";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //pega o valor assunto enviado via get pela url
   //ou um valor em branco
   $assunto = $_GET['assunto'] ?? "";
   $assunto = "%$assunto%";

   //vincula a variavel $assunto com o param ? no SQL
   $comando->bind_param("s", $assunto);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultado
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $noticias = [];
   //fetch_assoc
   while ($noticia = $resultados->fetch_object()){
      $noticias[] = $noticia;
   }
   







