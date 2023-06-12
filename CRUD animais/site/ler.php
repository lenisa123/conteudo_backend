
<?php 

    include_once "../template/cabecalho.php";
    include_once "../template/menu.php";
    include_once "../animal/consultar_por_id.php";
?>

<div class="container">
    <h1><?php echo $animal->nomedoanimal; ?></h1>
    <hr>
    <img src="../uploads/<?php echo $animal->foto; ?>" class="" />
    <p><?php echo $animal->nomedodono; ?></p>
</div>
<?php include_once "../template/rodape.php" ?>