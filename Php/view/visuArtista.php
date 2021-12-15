<?php
include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
include_once("../view/header.php");
?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Por Código Artista
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuArtista.php">
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Digite o código do Artista:</label>
            <input type="number" class="form-control" name="Id_Artis" id="inputBusca" placeholder="5678">
          </div>
          </br>
          <div class="col-12">
            <button type="submit" class="btn btn-primary"> Buscar </button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Por Código Cliente
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuArtista.php">
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Digite o Código do Cliente:</label>
            <input type="number" class="form-control" name="Id_Clie" id="inputBusca" placeholder="exemplo@gmail.com">
          </div>
          </br>
          <div class="col-12">
            <button type="submit" class="btn btn-primary"> Buscar </button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Código Artista</th>
      <th>Código Cliente</th>
    </tr>
  </thead>

  <tbody>

    <?php

    $Id_Artis = isset($_POST["Id_Artis"]) ? $_POST["Id_Artis"] : "";
    $Id_Clie = isset($_POST["Id_Clie"]) ? $_POST["Id_Clie"] : "";

    if ($Id_Artis) {
        $artista = listarCodArtista($conexao, $Id_Artis);
    } else {
        $artista = listarCodClie($conexao, $Id_Clie);
    }

    foreach ($artista as $artistas) {
    ?>
        <tr class="table-active">
        <th scope="row"> <?= $artistas["Id_Artis"] ?></th>
        <td><?= $artistas["Id_Clie"] ?></td>
        <td>
            <form action="../view/formAlterarArtista.php" method="POST">
                <input type="hidden" name="codUsu" value="<?= $artistas["Id_Artis"] ?>">
                <button type="submit" class="btn btn-primary"> Alterar </button>
            </form>
        </td>
        <td>
            <form action="../controller/deletarArtista.php" method="POST">
                <input type="hidden" name="codUsu" value="<?= $artistas["Id_Artis"] ?>">
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