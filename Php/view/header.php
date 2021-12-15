<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Tags Obrigátioas -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Icone Head-->
  <link rel=" shortcut icon" href="../view/imagens/icone.ico" type="imagex/png">

  <!-- Bootstrap Css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Estilo Css -->
  <link rel="stylesheet" href="../view/css/header.css">

  <title> Sistema de Música - Musicazil </title>
</head>

<body class="foto">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="../view/index.php"><img src="../view/imagens/icone.ico" class="navbarLogo"> </a>
      <!--<a class="navbar-brand" href="../view/index.php"> Musicazil </a> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../view/index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuários
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../view/cadUsuario.php"> Cadastrar </a></li>
              <li><a class="dropdown-item" href="../view/visuTudoUsua.php"> Pesquisar Todos </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../view/visuUsuario.php"> Pesquisar </a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Clientes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../view/cadCliente.php"> Cadastrar </a></li>
              <li><a class="dropdown-item" href="../view/visuTudoCliente.php"> Pesquisar Todos </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../view/visuCliente.php"> Pesquisar </a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Artista
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../view/cadArtista.php"> Cadastrar </a></li>
              <li><a class="dropdown-item" href="../view/visuTudoArtista.php"> Pesquisar Todos </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../view/visuArtista.php"> Pesquisar </a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Músicas
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../view/cadMusica.php"> Cadastrar </a></li>
              <li><a class="dropdown-item" href="../view/visuTudoMusica.php"> Pesquisar Todos </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="../view/visuMusica.php"> Pesquisar </a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex">
          <input class="barra-pesquisa" size="45" type="search" placeholder="Pesquise aqui!" aria-label="Search">
          <button class="btn-pesquisa" type="submit"> Pesquisar </button>
        </form>
      </div>
    </div>
  </nav>
  </div>
  </div>