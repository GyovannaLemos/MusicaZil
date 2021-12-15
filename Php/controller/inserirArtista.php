<?php
    include_once("../model/conexao.php");
    include_once("../model/modelArtista.php");

    extract($_REQUEST,EXTR_OVERWRITE);

    if(inserirArtistaBanco($conexao, $Id_Clie)){
        header("Location: ../view/cadArtista.php");
    }else{
        header("Location: ../view/cadArtista.php");
    }
?>