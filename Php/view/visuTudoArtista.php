<?php
include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
include_once("../view/header.php");
?>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Código Artista</th>
      <th>Código Cliente</th>
    </tr>
  </thead>


  <tbody>

    <?php
    $artista =  listarTudoArtista($conexao);
    foreach ($artista as $artistas) {
    ?>
      <tr class="table-active">
        <th scope="row"> <?= $artistas["Id_Artis"] ?></th>
        <td><?= $artistas["Id_Clie"] ?></td>
        <td>
          <form action="../controller/deletarArtista.php" method="POST">
            <input type="hidden" name="Id_Clie" value="<?= $artistas["Id_Artis"] ?>">
            <button type="submit" class="btn btn-danger"> Excluir </button>
          </form>
        </td>
      </tr>

    <?php
    }
    ?>

  </tbody>
</table>


<?php
include_once("../view/footer.php");
?>