<?php
include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
include_once("../view/header.php");
?>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Por Código da Música
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Id_Mus" class="form-label">Digite o código:</label>
            <input type="number" class="form-control" name="Id_Mus" id="inputBusca">
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
        Nome da Música
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Nome_Mus" class="form-label">Digite o Nome:</label>
            <input type="text" class="form-control" name="Nome_Mus" id="inputBusca">
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
        Genero
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Genero_Mus" class="form-label">Digite o Genero</label>
            <input type="text" class="form-control" name="Genero_Mus" id="inputBusca">
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
        Nome do Álbum
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Album_Mus" class="form-label">Digite o Nome do Album</label>
            <input type="text" class="form-control" name="Album_Mus" id="inputBusca">
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
        Duração
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Duracao_Mus" class="form-label">Digite a Duração da Música</label>
            <input type="time" class="form-control" name="Duracao_Mus" id="inputBusca">
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
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Link da Música
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Link_Mus" class="form-label">Digite o Link da Música</label>
            <input type="time" class="form-control" name="Link_Mus" id="inputBusca">
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
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Capa da Música
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Capa_Mus" class="form-label">Insira a Capa da Música</label>
            <input type="time" class="form-control" name="Capa_Mus" id="inputBusca">
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
    <h2 class="accordion-header" id="headingEight">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Data de Lançamento
      </button>
    </h2>
    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Data_Lança_Mus" class="form-label">Digite a Data de Lançamento da Música</label>
            <input type="date" class="form-control" name="Data_Lança_Mus" id="inputBusca">
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
    <h2 class="accordion-header" id="headingNine">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
        Letra da Música
      </button>
    </h2>
    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Letra_Mus" class="form-label">Digite a Letra da Música</label>
            <input type="time" class="form-control" name="Letra_Mus" id="inputBusca">
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
    <h2 class="accordion-header" id="headingTen">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
        Código do Artista
      </button>
    </h2>
    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <form method="POST" action="visuMusica.php">
          <div class="col-12">
            <label for="Id_Artis" class="form-label">Digite o Código do Artista</label>
            <input type="time" class="form-control" name="Id_Artis" id="inputBusca">
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
      <th scope="col">Código Musica</th>
      <th>Nome</th>
      <th>Genero</th>
      <th>Album</th>
      <th>Duração</th>
      <th>Link</th>
      <th>Capa</th>
      <th>Data de Lançamento</th>
      <th>Letra</th>
      <th>Código Artista</th>
    </tr>
  </thead>

  <tbody>

    <?php

    $Id_Mus = isset($_POST["Id_Mus"]) ? $_POST["Id_Mus"] : "";
    $Nome_Mus = isset($_POST["Nome_Mus"]) ? $_POST["Nome_Mus"] : "";
    $Genero_Mus = isset($_POST["Genero_Mus"]) ? $_POST["Genero_Mus"] : "";
    $Album_Mus = isset($_POST["Album_Mus"]) ? $_POST["Album_Mus"] : "";
    $Duracao_Mus = isset($_POST["Duracao_Mus"]) ? $_POST["Duracao_Mus"] : "";
    $Link_Mus = isset($_POST["Link_Mus"]) ? $_POST["Link_Mus"] : "";
    $Capa_Mus = isset($_POST["Capa_Mus"]) ? $_POST["Capa_Mus"] : "";
    $Data_Lança_Mus = isset($_POST["Data_Lança_Mus"]) ? $_POST["Data_Lança_Mus"] : "";
    $Letra_Mus = isset($_POST["Letra_Mus"]) ? $_POST["Letra_Mus"] : "";
    $Id_Artis = isset($_POST["Id_Artis"]) ? $_POST["Id_Artis"] : "";

    if ($Id_Mus) {
      $musica = listarCodMusica($conexao, $Id_Mus);
    } elseif ($Nome_Mus) {
      $musica = listarNomeMusica($conexao, $Nome_Mus);
    } elseif ($Genero_Mus) {
      $musica = listarGeneroMusica($conexao, $Genero_Mus);
    } elseif ($Duracao_Mus) {
      $musica = listarDuracaoMusica($conexao, $Duracao_Mus);
    } elseif ($Link_Mus) {
      $musica = listarLinkMusica($conexao, $Link_Mus);
    } elseif ($Capa_Mus) {
      $musica = listarCapaMusica($conexao, $Capa_Mus);
    } elseif ($Data_Lança_Mus) {
      $musica = listarDataMusica($conexao, $Data_Lança_Mus);
    } elseif ($Letra_Mus) {
      $musica = listarLetraMusica($conexao, $Letra_Mus);
    } else {
      $musica = listarIdArtisMusica($conexao, $Id_Artis);
    }



    foreach ($musica as $musicas) {
    ?>
      <tr class="table-active">
        <th scope="row"> <?= $musicas["Id_Mus"] ?></th>
        <td><?= $musicas["Nome_Mus"] ?></td>
        <td><?= $musicas["Genero_Mus"] ?></td>
        <td><?= $musicas["Duracao_Mus"] ?></td>
        <td><?= $musicas["Link_Mus"] ?></td>
        <td><?= $musicas["Capa_Mus"] ?></td>
        <td><?= $musicas["Data_Lança_Mus"] ?></td>
        <td><?= $musicas["Letra_Mus"] ?></td>
        <td><?= $musicas["Id_Artis"] ?></td>

        <td>
          <form action="../view/formAlterarMusica.php" method="POST">
            <input type="hidden" name="Id_Mus" value="<?= $musicas["Id_Mus"] ?>">
            <button type="submit" class="btn btn-primary"> Alterar </button>
          </form>
        </td>
        <td>
          <form action="../controller/deletarMusica.php" method="POST">
            <input type="hidden" name="Id_Mus" value="<?= $musicas["Id_Mus"] ?>">
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