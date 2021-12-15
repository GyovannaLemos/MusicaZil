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
    include_once("header.php");
    ?>

    <form id="formusu" method="POST" action="../controller/inserirCliente.php">
        <div class="mb-3">
            <label for="idCliente" class="form-label">Id_Usuario </label>
            <input type="number" class="form-control" name="Id_Usua" id="Id_Usua">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label"> Nome Completo </label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label"> Data de Nascimento </label>
            <input type="date" class="form-control" name="data" id="data">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label"> Telefone </label>
            <input type="tel" class="form-control" name="telefone" id="telefone">
        </div>
        <button type="submit" id="btncad" class="btn btn-primary col-md-3"> Cadastrar </button>
    </form>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>