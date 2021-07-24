<?php
    include "service/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html>

    <head>
        <meta charset = "UTF-8">
        <title>FORMULÁRIO DE INSCRIÇÃO</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width-device-width, initial-scale=1">
    </head>

    <body>

        <p>FORMULÁRIO DE INSCRIÇÃO DE COMPETIDORES</p>

        <form action="script.php" method="post">

            <?php

                $MensagemDeSucesso = obterMensagemSucesso();
                if(!empty($MensagemDeSucesso))
                {
                    echo $MensagemDeSucesso;
                }

                $MensagemDeErro = obterMensagemErro();
                if(!empty($MensagemDeErro))
                {
                    echo $MensagemDeErro;
                }
            ?>
            <p>Nome: <input type="text" name="nome" /></p>
            <p>Idade: <input type="text" name="idade" /></p>
            <p><input type="submit" value="Enviar dados do competidor" /></p>

        </form>

    </body>


</html>