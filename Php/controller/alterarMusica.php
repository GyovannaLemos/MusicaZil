<?php
include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
/* include_once("../view/header.php"); */

extract($_REQUEST, EXTR_OVERWRITE);

if (alterarMusica($conexao, $Nome_Mus, $Genero_Mus, $Album_Mus, $Duracao_Mus, $Link_Mus, $Capa_Mus, $Data_Lança_Mus, $Letra_Mus, $Id_Mus)) {
    header("Location: ../view/visuTudoMusica.php");
} else {
    header("Location: ../view/visuTudoMusica.php");
}
?>


<?php
include_once("../view/footer.php");
?>