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

  <form id="formusu" method="POST" action="../controller/inserirUsuario.php">
    <div class="mb-4 col-md-8">
      <label for="exampleInputEmail1" class="form-label">Email </label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-4 col-md-8">
      <label for="exampleInputPassword1" class="form-label"> Senha </label>
      <input type="password" class="form-control" name="senha" id="exampleInputPassword1">
    </div>
    <button type="submit" id="btncad" class="btn btn-primary col-md-3"> Cadastrar </button>
  </form>

  <?php
  include_once("footer.php");
  ?>

</body>

</html>