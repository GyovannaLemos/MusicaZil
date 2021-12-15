<?php
include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
include_once("../view/header.php");
?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Por Código
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuUsuario.php">
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Digite o código:</label>
            <input type="number" class="form-control" name="codigoUsu" id="inputBusca" placeholder="5678">
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
        Por E-mail
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuUsuario.php">
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Digite o E-mail:</label>
            <input type="text" class="form-control" name="emailUsu" id="inputBusca" placeholder="exemplo@gmail.com">
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
      <th scope="col">Código</th>
      <th>E-mail</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </tr>
  </thead>

  <tbody>

    <?php

    /* if($_POST["codigoUsu"]) {
    $codigoUsu = $_POST["codigoUsu"]
  }else {
    $codigoUsu = "";
  } */

    $codigoUsu = isset($_POST["codigoUsu"]) ? $_POST["codigoUsu"] : "";
    $emailUsu = isset($_POST["emailUsu"]) ? $_POST["emailUsu"] : "";

    if ($codigoUsu) {
      $usuario = listarUsuarioCodigo($conexao, $codigoUsu);
    } else {
      $usuario = listarUsuarioEmail($conexao, $emailUsu);
    }

    foreach ($usuario as $usuarios) {
    ?>
      <tr class="table-active">
        <th scope="row"> <?= $usuarios["Id_Usua"] ?></th>
        <td><?= $usuarios["Email_Usua"] ?></td>
        <td>
          <form action="../view/formAlterarUsuario.php" method="POST">
            <input type="hidden" name="codUsu" value="<?= $usuarios["Id_Usua"] ?>">
            <button type="submit" class="btn btn-primary"> Alterar </button>
          </form>
        </td>
        <td>
          <form action="../controller/deletarUsuario.php" method="POST">
            <input type="hidden" name="codUsu" value="<?= $usuarios["Id_Usua"] ?>">
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