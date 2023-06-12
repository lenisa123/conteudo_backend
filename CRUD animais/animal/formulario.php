<?php
    require_once "../login/controlar_acesso.php";
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu_restrito.php";
?>

<div class="container">

    <h1>Cadastro de Animais</h1>
    <hr>

    <form action="<?php echo isset($animal) ? "atualizar.php" : "inserir.php";?>" method="post" enctype="multipart/form-data">

        <input type="hidden" name="codigo" value="<?php echo $animal->codigo ?? "" ;?>"><br>

        <label class="form-label">Nome do animal</label><br>
        <input class="form-control" type="text" name="nomedoanimal" value="<?php echo $animal->nomedoanimal ?? "" ;?>"><br>

        <label class="form-label">Nome do dono</label><br>
        <input class="form-control" type="text" name="nomedodono"><?php echo $animal->nomedodono ?? "" ;?></textarea><br>

        <label class="form-label">Raça</label><br>
        <input class="form-control" type="text" name="raca" value="<?php echo $animal->raca ?? "" ;?>"><br>

        <label class="form-label">Peso</label><br>
        <input class="form-control" type="text" name="peso" value="<?php echo $animal->peso ?? "" ;?>"><br>

        <label class="form-label">Idade</label><br>
        <input class="form-control" type="text" name="idade" value="<?php echo $animal->idade ?? "" ;?>"><br>

        <label class="form-label">Foto</label><br>
        <input class="form-control" type="file" name="foto"><br><br>

        <button class="btn btn-warning" type="submit">Inserir</button>
        
    </form>
</div>

<?php require_once "../template/rodape.php" ;?>
    
