<?php
include_once("../model/conexao.php");
include_once("../model/modelArtista.php");
/* include_once("../view/header.php"); */

extract($_REQUEST, EXTR_OVERWRITE);

if (deletarArtista($conexao, $Id_Clie)) {
    header("Location: ../view/visuTudoArtista.php");
} else {
    header("Location: ../view/visuTudoArtista.php");
}
?>


<?php
include_once("../view/footer.php");
?>