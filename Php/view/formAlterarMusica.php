<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicaZil</title>

    <link rel="stylesheet" href="../view/css/form.css">
</head>

<body class="fundo">
    <?php
    include_once("../view/header.php");
    include_once("../model/modelMusica.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    $resultado = listarCodMusica($conexao, $Id_Mus);
    $musica = mysqli_fetch_assoc($resultado);
    ?>

    <form id="formusu" class="row g-3" method="POST" action="../controller/alterarMusica.php">

        <div class="mb-3 col-md-3">
            <label for="Id_Mus" class="form-label"> Código Música </label>
            <input type="number" class="form-control" value="<?= $musica["Id_Mus"] ?>" name="Id_Mus" id="Id_Mus" readonly>
        </div>

        <div class="mb-3 col-md-8">
            <label for="Nome_Mus" class="form-label">Nome Música </label>
            <input type="text" class="form-control" value="<?= $musica["Nome_Mus"] ?>" name="Nome_Mus" id="Nome_Mus" required>
        </div>

        <div class="mb-3 col-md-8">
            <label for="Genero_Mus" class="form-label"> Genero </label>
            <input type="text" class="form-control" value="<?= $musica["Genero_Mus"] ?>" name="Genero_Mus" id="Genero_Mus">
        </div>

        <div class="mb-3 col-md-5">
            <label for="Album_Mus" class="form-label"> Album </label>
            <input type="text" class="form-control" value="<?= $musica["Album_Mus"] ?>" name="Album_Mus" id="Album_Mus">
        </div>

        <div class="mb-3 col-md-3">
            <label for="Duracao_Mus" class="form-label"> Duração </label>
            <input type="time" class="form-control" value="<?= $musica["Duracao_Mus"] ?>" name="Duracao_Mus" id="Duracao_Mus">
        </div>

        <div class="mb-3 col-md-8">
            <label for="Link_Mus" class="form-label"> Link </label>
            <input type="text" class="form-control" value="<?= $musica["Link_Mus"] ?>" name="Link_Mus" id="Link_Mus">
        </div>

        <div class="mb-3 col-md-5">
            <label for="Capa_Mus" class="form-label"> Capa </label>
            <input type="text" class="form-control" value="<?= $musica["Capa_Mus"] ?>" name="Capa_Mus" id="Capa_Mus">
        </div>

        <div class="mb-3 col-md-3">
            <label for="Data_Lança_Mus" class="form-label"> Data de Lançamento </label>
            <input type="date" class="form-control" value="<?= $musica["Data_Lança_Mus"] ?>" name="Data_Lança_Mus" id="Data_Lança_Mus">
        </div>

        <div class="mb-3 col-md-8">
            <label for="Letra_Mus" class="form-label"> Letra </label>
            <input type="text" class="form-control" value="<?= $musica["Letra_Mus"] ?>" name="Letra_Mus" id="Letra_Mus">
        </div>



        <button type="submit" id="btncad" class="btn btn-primary "> Alterar </button>
    </form>

    <?php
    include_once("footer.php");
    ?>

</body>

</html>