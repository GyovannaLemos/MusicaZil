<?php
include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
/* include_once("../view/header.php"); */

extract($_REQUEST, EXTR_OVERWRITE);

if (alterarUsuario($conexao, $email, $senha, $codUsu)) {
    header("Location: ../view/visuTudoUsua.php");
} else {
    header("Location: ../view/visuTudoUsua.php");
}
?>


<?php
include_once("../view/footer.php");
?>