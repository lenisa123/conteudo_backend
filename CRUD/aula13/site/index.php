<?php
    //"include" e "require" fazem a mesma coisa, 
    //porém o include continua executando apos um erro
    //include_once: faz a inclusao apenas uma vez
    include_once "../noticia/consultar_todos.php";
    include_once "../template/cabecalho.php";
    include_once "../template/menu.php";
    
?>

    <!-- noticias -->
    <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-3">
            <?php foreach($noticias as $id => $noticia): ?>
              <div class="col">
                    <div class="card">
                        <img src="../uploads/<?php echo $noticia->foto; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $noticia->titulo?></h3>

                        </div>
                    </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- fim noticias -->
    
    <?php include_once "../template/rodape.php" ?>