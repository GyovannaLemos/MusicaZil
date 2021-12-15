<?php
include_once("../model/conexao.php");
include_once("../model/modelMusica.php");
/* include_once("../view/header.php"); */

extract($_REQUEST, EXTR_OVERWRITE);

if (deletarMusica($conexao, $Id_Mus)) {
    header("Location: ../view/visuTudoMusica.php");
} else {
    header("Location: ../view/visuTudoMusica.php");
}
?>


<?php
include_once("../view/footer.php");
?>