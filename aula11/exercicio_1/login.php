<h1>Login</h1>

<?php
//sempre que for utilizar o elemneto do formuláro, 
//usar também o $_GET e o elemento entre chaves []
    if($_GET['usuario']=='adm' && $_GET['senha']=='123'){
        echo "usuário logado";
    }else{
        echo "usuário não identificado";
    }

?>