<?php
include_once("../model/conexao.php");
include_once("../model/modelCliente.php");
include_once("../view/header.php");
?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Por Código Cliente
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuCliente.php">
          <div class="col-12">
            <label for="Id_Clie" class="form-label">Digite o código:</label>
            <input type="number" class="form-control" name="Id_Clie" id="inputBusca" placeholder="5678">
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
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        Perquisar por Nome
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuCliente.php">
          <div class="col-12">
            <label for="Nome_Clie" class="form-label">Digite o Nome:</label>
            <input type="text" class="form-control" name="Nome_Clie" id="inputBusca" placeholder="Guilherme">
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
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Pesquise por Data de Nascimento
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuCliente.php">
          <div class="col-12">
            <label for="Dt_Nasc" class="form-label">Digite a Data de Nascimento</label>
            <input type="date" class="form-control" name="Dt_Nasc" id="inputBusca">
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
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Telefone
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuCliente.php">
          <div class="col-12">
            <label for="Fone_Clie" class="form-label">Digite o Número de Telefone:</label>
            <input type="tel" class="form-control" name="Fone_Clie" id="inputBusca">
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
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Código Usuário
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuCliente.php">
          <div class="col-12">
            <label for="Id_Usua" class="form-label">Digite o Código do Usuário:</label>
            <input type="number" class="form-control" name="Id_Usua" id="inputBusca">
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
      <th scope="col">Código Cliente</th>
      <th>Nome</th>
      <th>Data de Nascimento</th>
      <th>Telefone</th>
      <th> Código Usuário</th>
    </tr>
  </thead>

  <tbody>

    <?php

    $codClie = isset($_POST["codClie"]) ? $_POST["codClie"] : "";
    $Nome_Clie = isset($_POST["Nome_Clie"]) ? $_POST["Nome_Clie"] : "";
    $Dt_Nasc = isset($_POST["Dt_Nasc"]) ? $_POST["Dt_Nasc"] : "";
    $Fone_Clie = isset($_POST["Fone_Clie"]) ? $_POST["Fone_Clie"] : "";
    $Id_Usua = isset($_POST["Id_Usua"]) ? $_POST["Id_Usua"] : "";


    if ($codClie) {
      $cliente = listarCodCliente($conexao, $codClie);
    } elseif ($Nome_Clie) {
      $cliente = listarNomeCliente($conexao, $Nome_Clie);
    } elseif ($Dt_Nasc) {
      $cliente = listarDataCliente($conexao, $Dt_Nasc);
    } elseif ($Fone_Clie) {
      $cliente = listarTelCliente($conexao, $Fone_Clie);
    } else {
      $cliente = listarUsuarioCodigo($conexao, $Id_Usua);
    }



    foreach ($cliente as $clientes) {
    ?>
      <tr class="table-active">
        <th scope="row"> <?= $clientes["Id_Clie"] ?></th>
        <td><?= $clientes["Nome_Clie"] ?></td>
        <td><?= $clientes["Dt_Nasc"] ?></td>
        <td><?= $clientes["Fone_Clie"] ?></td>
        <td><?= $clientes["Id_Usua"] ?></td>

        <td>
          <form action="../view/formAlterarCliente.php" method="POST">
            <input type="hidden" name="codClie" value="<?= $clientes["Id_Clie"] ?>">
            <button type="submit" class="btn btn-primary"> Alterar </button>
          </form>
        </td>
        <td>
          <form action="../controller/deletarCliente.php" method="POST">
            <input type="hidden" name="codClie" value="<?= $clientes["Id_Clie"] ?>">
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