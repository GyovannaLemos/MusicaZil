<?php
function inserirArtistaBanco($conexao, $Id_Clie)
{
    $query = "insert into tb_artista(Id_Clie)values( '{$Id_Clie}')";
    $resultado  = mysqli_query($conexao, $query);
    return $resultado;
}

function listarTudoArtista($conexao)
{
    $query = "select * from tb_artista";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarCodArtista($conexao, $Id_Artis)
{
    $query = "select * from tb_artista where Id_Artis = '{$Id_Artis}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarCodClie($conexao, $Id_Clie)
{
    $query = "select * from tb_artista where Id_Artis = '{$Id_Clie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

/*
function deletarArtista($conexao, $Id_Artis)
{
    $query = "delete from tb_artista where Id_Clie = '{$Id_Artis}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function alterarArtista($conexao, $Id_Clie)
{
    $query = "update tb_artista set Id_Artis = '{$Id_Clie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
*/
