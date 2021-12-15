<?php
include_once("../model/conexao.php");
include_once("../model/modelCliente.php");
/* include_once("../view/header.php"); */

extract($_REQUEST, EXTR_OVERWRITE);

if (deletarCliente($conexao, $Id_Clie)) {
    header("Location: ../view/visuTudoCliente.php");
} else {
    header("Location: ../view/visuTudoCliente.php");
}
?>


<?php
include_once("../view/footer.php");
?>