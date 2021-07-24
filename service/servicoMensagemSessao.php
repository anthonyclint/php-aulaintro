<?php

session_start();

function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem de erro'] = $mensagem;
}

function obterMensagemErro() : ?string // o símbolo ? chamado de coringa indica que a função pode retornar uma string ou então o null
{
    if(isset($_SESSION['mensagem de erro']))
    {
        return $_SESSION['mensagem de erro'];
    }

    return null;
}

function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string // o símbolo ? chamado de coringa indica que a função pode retornar uma string ou então o null
{
    if(isset($_SESSION['mensagem de sucesso']))
    {
        return $_SESSION['mensagem de sucesso'];
    }

    return null;
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['mensagem de erro']))
    {
        unset($_SESSION['mensagem de erro']);
    }
}

function removerMensagemSucesso() : void
{
    if(isset($_SESSION['mensagem de sucesso']))
    {
        unset($_SESSION['mensagem de sucesso']);
    }
}