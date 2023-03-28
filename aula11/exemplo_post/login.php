<h1>Login</h1>

<?php
//se existe, ou foi enviada, a variável usuário
if(isset($_POST['usuario'])){

//sempre que for utilizar o elemneto do formuláro, 
//usar também o $_GET e o elemento entre chaves []
    if($_POST['usuario']=='adm' && $_POST['senha']=='123'){
        echo "usuário logado";
    }else{
        echo "usuário não identificado";
    }
}else{
    //manda abrir outro arquivo, o formulário de login,
    //caso o usuário tente abrir esse arquivo pela URL
    //sem acessar o formulario de login "redirecionamento"
    header("location: form_login.html");
}
?>