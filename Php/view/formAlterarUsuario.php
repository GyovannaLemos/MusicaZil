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
    include_once("../model/modelUsuario.php");
    include_once("../model/conexao.php");

    extract($_REQUEST, EXTR_OVERWRITE);

    $resultado = listarUsuarioCodigo($conexao, $codUsu);
    $usuario = mysqli_fetch_assoc($resultado);
    ?>

    <form id="formusu" method="POST" action="../controller/alterarUsuario.php">

        <div class="mb-3">
            <label for="codigo" class="form-label"> Código</label>
            <input type="text" class="form-control" value="<?= $usuario["Id_Usua"] ?>" name="codUsu" id="codigo" readonly>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email </label>
            <input type="email" class="form-control" value="<?= $usuario["Email_Usua"] ?>" name="email" id="email" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label"> Senha </label>
            <input type="password" class="form-control" name="senha" id="senha" required>
        </div>
        <button type="submit" id="btncad" class="btn btn-primary col-md-3"> Alterar </button>
    </form>

    <?php
    include_once("footer.php");
    ?>

</body>

</html>