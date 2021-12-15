<!DOCTYPE html>
<html lang="pt-bt">

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
    ?>

    <form id="formusu" method="POST" action="../controller/inserirArtista.php">
        <div class="mb-3">
            <label for="Id_Artis" class="form-label">Id_Artista </label>
            <input type="number" class="form-control" name="Id_Artis" id="Id_Artis">
        </div>
        <div class="mb-3">
            <label for="Id_Clie" class="form-label"> Id_Cliente </label>
            <input type="number" class="form-control" name="Id_Clie" id="Id_Clie">
        </div>
        <button type="submit" id="btncad" class="btn btn-primary col-md-3"> Cadastrar </button>
    </form>

    <?php
    include_once("../view/footer.php");
    ?>

</body>

</html>