<?php

function inserirClienteBanco($conexao, $Nome_Clie, $Dt_Nasc, $Fone_Clie, $Id_Usua)
{
    $query = "insert into tb_cliente(Nome_Clie, Dt_Nasc, Fone_Clie, Id_Usua)values('{$Nome_Clie}', '{$Dt_Nasc}', '{$Fone_Clie}', '{$Id_Usua}')";
    $resultado  = mysqli_query($conexao, $query);
    return $resultado;
}

function listarTudoCliente($conexao)
{
    $query = "select * from tb_cliente";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarCodCliente($conexao, $Id_Clie)
{
    $query = "select * from tb_cliente where Id_Clie = '{$Id_Clie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarNomeCliente($conexao, $Nome_Clie)
{
    $query = "select * from tb_cliente where Nome_Clie like '%{$Nome_Clie}%'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarDataCliente($conexao, $Dt_Nasc)
{
    $query = "select * from tb_cliente where Dt_Nasc = '{$Dt_Nasc}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarTelCliente($conexao, $Fone_Clie)
{
    $query = "select * from tb_cliente where Fone_Clie like '{$Fone_Clie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarUsuarioCodigo($conexao, $Id_Usua)
{
    $query = "select * from tb_cliente where Id_Usua = '{$Id_Usua}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}


function alterarCliente($conexao, $Nome_Clie, $Dt_Nasc, $Fone_Clie, $Id_Clie)
{

    $query = "update tb_cliente set Nome_Clie = '{$Nome_Clie}', Dt_Nasc = '{$Dt_Nasc}', Fone_Clie = '{$Fone_Clie}', where Id_Clie = '{$Id_Clie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deletarCliente($conexao, $Id_Clie)
{
    $query = "delete from tb_cliente where Id_Clie = '{$Id_Clie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
