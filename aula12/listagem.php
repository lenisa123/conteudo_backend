<?php
    //"include" e "require" fazem a mesma coisa, 
    //porém o include continua executando apos um erro
    //include_once: faz a inclusao apenas uma vez
    include_once "dados.php";
    include_once "header.php";
    include_once "menu.php";
    
?>




    

    <!-- noticias -->
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-3">
            <?php foreach($noticias as $id => $noticia): ?>
              <div class="col">
                    <div class="card">
                        <img src="<?php echo $noticia['foto']?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $noticia['titulo']?></h5>
                            <p class="card-text"><?php echo $noticia['chamada']?></p>
                            <a href="ler.php?id=<?php echo $id?>" class="btn btn-primary"> Ler mais</a>
                        </div>
                    </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- fim noticias -->
    
    <?php include_once "rodape.php" ?>