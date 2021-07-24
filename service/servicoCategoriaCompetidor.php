<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categoria = [];
    $categoria[] = 'infantil';
    $categoria[] = 'adolescente';
    $categoria[] = 'adulto';

    if(validaNome($nome) && validaIdade($idade))
    {

        removerMensagemErro();

        if($idade >= 6 && $idade <= 12)
        {
            for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'infantil')
                {
                    setarMensagemSucesso(mensagem: "O nadador $nome compete na categoria infantil.");
                    return null;
                }
            }
        }
        elseif($idade >= 13 && $idade <= 18)
        {
            for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'adolescente')
                {
                    setarMensagemSucesso(mensagem: "O nadador $nome compete na categoria adolescente.");
                    return null;
                }
            }
        }
        else
        {
            for($i = 0; $i <= count($categoria); $i++)
            {
                if($categoria[$i] == 'adulto')
                {
                    setarMensagemSucesso(mensagem: "O nadador $nome compete na categoria adulto.");
                    return null;
                }
            }
        }
    }
    else
    {
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}