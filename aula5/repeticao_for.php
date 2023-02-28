<h2>Estrutura de repetição - for</h2>
<p>
    Utilizada para repetir um conjunto de instruções por um
    número determinado de vezes.
</p>
<strong>Exemplo</strong>
<pre>
    for(início, condição, passo){
        //comandos a serem repetidos.
    }
</pre>

<?php
    for($contador = 0; $contador < 11; $contador++){
        echo "2 x $contador = 2*$contador <br>";
    }
?>