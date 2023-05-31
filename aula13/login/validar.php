<?php
    //importa o arquivo de conexão
    require_once "../banco/conexao.php";

    if(isset($_POST['login']) and isset($_POST['senha'])){
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        //cria uma variável com um comando SQL
        $SQL = "SELECT * FROM `usuario` WHERE  `login`= ? ;";
        
        //prepara o comando para ser executado no mysql
        $comando = $conexao->prepare($SQL);

        //diz qual valor vai ser colocado no lugar do ?
        $comando->bind_param("i", $login);

        //executa o comando
        $comando->execute();

        //pegar os resultados da consulta - todas as linhas de resultado
        $resultados = $comando->get_result();

        //pega a primeira linha de resultado da consulta
        $usuario = $resultados->fetch_object();

        //imprimir o resultado
        var_dump($usuario);
        
    }else{
        header("Location: formulario.php");
    }

?>