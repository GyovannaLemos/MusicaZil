<?php
include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
include_once("../view/header.php");
?>
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
    $usuario = listarTudoUsua($conexao);
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