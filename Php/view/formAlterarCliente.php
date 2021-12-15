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
    include_once("../model/modelCliente.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    $resultado = listarCodCliente($conexao, $Id_Clie);
    $cliente = mysqli_fetch_assoc($resultado);
    ?>

    <form id="formusu" method="POST" action="../controller/alterarCliente.php">

        <div class="mb-3">
            <label for="Id_Clie" class="form-label"> Código Cliente</label>
            <input type="number" class="form-control" value="<?= $cliente["Id_Clie"] ?>" name="Id_Clie" id="Id_Clie" readonly>
        </div>

        <div class="mb-3">
            <label for="Nome_Clie" class="form-label">Nome </label>
            <input type="text" class="form-control" value="<?= $cliente["Nome_Clie"] ?>" name="Nome_Clie" id="Nome_Clie" required>
        </div>

        <div class="mb-3">
            <label for="Dt_Nasc" class="form-label">Data de Nascimento </label>
            <input type="date" class="form-control" value="<?= $cliente["Dt_Nasc"] ?>" name="Dt_Nasc" id="Dt_Nasc" required>
        </div>

        <div class="mb-3">
            <label for="Fone_Clie" class="form-label">Telefone </label>
            <input type="tel" class="form-control" value="<?= $cliente["Fone_Clie"] ?>" name="Fone_Clie" id="Fone_Clie" required>
        </div>


        <button type="submit" id="btncad" class="btn btn-primary col-md-3"> Alterar </button>
    </form>

    <?php
    include_once("footer.php");
    ?>

</body>

</html>