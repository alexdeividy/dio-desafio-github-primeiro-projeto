<?php

include 'conexao.php';

$id_tec = $_POST['id_tec'];
$nome_tec = $_POST['nome_tec'];
$email_tec = $_POST['email_tec'];
$telefone_tec = $_POST['telefone_tec'];

$recebendo_cadastros_tec = "UPDATE
tb_tecnicos
SET nome_tec ='$nome_tec', email_tec ='$email_tec', telefone_tec ='$telefone_tec'
WHERE id_tec = '$id_tec' ";

$query_cadastros_tec = mysqli_query($connx, $recebendo_cadastros_tec);

header('location: listagemtec.php');


?>