<?php

include 'conexao.php';

$nome_tec = $_POST['nome'];
$email_tec = $_POST['email'];
$telefone_tec = $_POST['telefone'];

$recebendo_cadastros_tec = "INSERT INTO
tb_tecnicos
VALUES ('','$nome_tec','$email_tec','$telefone_tec')";

$query_cadastros_tec = mysqli_query($connx, $recebendo_cadastros_tec);

header('location: listagemtec.php');


?>