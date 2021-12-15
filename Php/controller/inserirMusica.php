
<?php
include_once("../model/modelMusica.php");
include_once("../model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (inserirMusicaBanco($conexao, $Nome_Mus, $Genero_Mus, $Album_Mus, $Duracao_Mus, $Link_Mus, $Capa_Mus, $Data_Lança_Mus, $Letra_Mus, $Id_Artis)) {
    header("Location: ../view/cadMusica.php");
} else {
    header("Location: ../view/cadMusica.php");
}
?>