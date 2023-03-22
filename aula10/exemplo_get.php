<h1>Request Method : GET</h1>

<?php

   $resposta = ($_GET)['n1'] + $_GET['n2'];
   echo $resposta;
    //na url, escrever:
    //http://localhost/.../exemplo_get.php?n1=15&n2=20
?>