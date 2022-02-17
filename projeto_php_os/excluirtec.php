<?php

include 'conexao.php';

$id_tec = $_POST['id_tec'];

$recebendo_cadastros_tec = "DELETE FROM tb_tecnicos WHERE id_tec ='$id_tec'";

$query_cadastros_tec = mysqli_query($connx, $recebendo_cadastros_tec);

header('location: listagemtec.php');


?>