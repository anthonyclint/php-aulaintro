<?php
/*O sistema deve permitir a inserção de competidores com seu nome e idade e o sistema deverá identificar em qual categoria
 * o nadador irá competir: 6 a 12 anos; 13 a 18 anos; acima de 18 anos.*/

include "service/servicoMensagemSessao.php";
include "service/servicoValidacao.php";
include "service/servicoCategoriaCompetidor.php";

$nome = $_POST['nome']; // vinculando com os inputs do arquivo index
$idade = $_POST['idade']; // vinculando com os inputs do arquivo index

defineCategoriaCompetidor($nome, $idade);

header("location: index.php");
