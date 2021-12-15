<?php

function inserirMusicaBanco($conexao, $Nome_Mus, $Genero_Mus, $Album_Mus, $Duracao_Mus, $Link_Mus, $Capa_Mus, $Data_Lança_Mus, $Letra_Mus, $Id_Artis)
{
    $query = "insert into tb_musica(Nome_Mus, Genero_Mus, Album_Mus, Duracao_Mus, Link_Mus,	Capa_Mus, Data_Lança_Mus, Letra_Mus, Id_Artis)
        values('{$Nome_Mus}', '{$Genero_Mus}', '{$Album_Mus}', '{$Duracao_Mus}', '{$Link_Mus}', '{$Capa_Mus}', '{$Data_Lança_Mus}', '{$Letra_Mus}', '{$Id_Artis}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarTudoMusica($conexao)
{
    $query = "select * from tb_musica";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarCodMusica($conexao, $Id_Mus)
{
    $query = "select * from tb_musica where Id_Mus = '{$Id_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarNomeMusica($conexao, $Nome_Mus)
{
    $query = "select * from tb_musica where Nome_Mus = '{$Nome_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarGeneroMusica($conexao, $Genero_Mus)
{
    $query = "select * from tb_musica where Genero_Mus = '{$Genero_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarAlbumMusica($conexao, $Album_Mus)
{
    $query = "select * from tb_musica where Album_Mus = '{$Album_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarDuracaoMusica($conexao, $Duracao_Mus)
{
    $query = "select * from tb_musica where Genero_Mus = '{$Duracao_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarLinkMusica($conexao, $Link_Mus)
{
    $query = "select * from tb_musica where Link_Mus = '{$Link_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarCapaMusica($conexao, $Capa_Mus)
{
    $query = "select * from tb_musica where Capa_Mus = '{$Capa_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarDataMusica($conexao, $Data_Lança_Mus)
{
    $query = "select * from tb_musica where Data_Lança_Mus = '{$Data_Lança_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarLetraMusica($conexao, $Letra_Mus)
{
    $query = "select * from tb_musica where Letra_Mus = '{$Letra_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarIdArtisMusica($conexao, $Id_Artis)
{
    $query = "select * from tb_musica where Id_Artis = '{$Id_Artis}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function alterarMusica($conexao, $Nome_Mus, $Genero_Mus, $Album_Mus, $Duracao_Mus, $Link_Mus, $Capa_Mus, $Data_Lança_Mus, $Letra_Mus, $Id_Mus)
{

    $query = "update tb_cliente set Nome_Mus = '{$Nome_Mus}', Genero_Mus = '{$Genero_Mus}', Album_Mus = '{$Album_Mus}', Duracao_Mus = '{$Duracao_Mus}', Link_Mus = '{$Link_Mus}',
        Capa_Mus = '{$Capa_Mus}', Data_Lança_Mus = '{$Data_Lança_Mus}', Letra_Mus = '{$Letra_Mus}', where Id_Mus = '{$Id_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deletarMusica($conexao, $Id_Mus)
{
    $query = "delete from tb_musica where Id_Mus = '{$Id_Mus}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
