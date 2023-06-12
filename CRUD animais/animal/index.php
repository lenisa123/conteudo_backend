<?php 
      require_once "../login/controlar_acesso.php";
      require "consultar_todos.php"; 
      require_once "../template/cabecalho.php";
      require_once "../template/menu_restrito.php";

?>

    <div class="container">
    <h1>Animais</h1> 
    <hr>
  <div class="text-end">
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a>
    </div>
    <table class="table" id="tabela_dados">
    <thead>
        <tr>
            <th scope="col">Nome do animal</th>
            <th scope="col">Nome do dono</th>
            <th scope="col">Raça</th>
            <th scope="col">Peso</th>
            <th scope="col">Idade</th>
            <th scope="col">Foto</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($animais as $animal): ?>
        <tr>
            <td><?= $animal -> nomedoanimal ?></td>
            <td><?= $animal -> nomedodono ?></td>
            <td><?= $animal -> raca ?></td>
            <td><?= $animal -> peso ?></td>
            <td><?= $animal -> idade ?></td>
            <td><img src="../uploads/<?= $animal->foto ?>" height="30px"></td>
            <td class="text_end" width="25%">
              <a href="excluir.php?id=<?= $animal -> codigo ?>" class="btn btn-danger"> 
                <i class="fa-solid fa-trash-can"></i> 
                Excluir
              </a>

                <a href="formulario.php?id=<?= $animal -> codigo ?>" class="btn btn-primary"> 
                <i class="fa-solid fa-pen-to-square"></i> 
                Atualizar
              </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
    </table>

    </div>
<?php require_once "../template/rodape.php";
?>