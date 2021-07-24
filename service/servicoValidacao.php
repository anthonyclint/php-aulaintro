<?php

//declare('strict_type = 1'); essa função ativa recurso de tipagem

function validaNome(string $nome) : bool // :bool indica que o retorno da função será booleano
{
    if(empty($nome)) // se a váriável não for preenchida pelo user
    {
        setarMensagemErro(mensagem:'O nome não pode ser vazio!');
        return false;
    }
    elseif(strlen($nome) <= 3) // strlen conta os caracteres
    {
        setarMensagemErro(mensagem: 'O nome deve conter mais de 3 caracteres!');
        return false;
    }
    elseif(strlen($nome) > 25) // caso digite mais que 25 caracteres
    {
        setarMensagemErro(mensagem: 'O nome é muito extenso!');
        return false;
    }

    return true;
}

function validaIdade(string $idade) : bool
{
    if(!is_numeric($idade)) // se user não digitar um número
    {
        setarMensagemErro(mensagem: 'Informe um valor númerico para a idade!');
        return false;
    } 
    
    return true;
}

