<?php

function inserirUsuarioBanco($conexao, $senha, $email)
{

    $opcao = ['cost' => 8];

    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = "insert into Tb_usuario(Email_Usua, Senha_Usua)values('{$email}', '{$senhaCrypto}')";
    $resultado  = mysqli_query($conexao, $query);
    return $resultado;
}

function listarTudoUsua($conexao)
{
    $query = "select * from tb_usuario";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarUsuarioCodigo($conexao, $codigoUsu)
{
    $query = "select * from tb_usuario where Id_Usua = '{$codigoUsu}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listarUsuarioEmail($conexao, $emailUsu)
{
    $query = "select * from tb_usuario where Email_Usua like '%{$emailUsu}%'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deletarUsuario($conexao, $codUsu)
{
    $query = "delete from tb_usuario where Id_Usua = '{$codUsu}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function alterarUsuario($conexao, $email, $senha, $codUsu)
{
    $opcao = ['cost' => 8];
    $senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

    $query = "update tb_usuario set Email_Usua = '{$email}', Senha_Usua = '{$senhaCrypto}' where Id_Usua = '{$codUsu}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

