<?php

include 'conexao.php';

$buscar_consertos = "SELECT * FROM tb_consertos";
$query_consertos = mysqli_query($connx, $buscar_consertos);

?>



<!doctype html>
<html lang="en">
  <head>
    <title>CONSERTO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  <table class="table">
      <thead>
          <tr>
              <br><h1>Selecione o conserto a ser feito:</h1><br><br>
              <input type="submit" value="Conserto de Tela"
            onclick="location.href='tecnico.php'"><br><br>
            <input type="submit" value="Conserto de Placa"
            onclick="location.href='tecnico.php'"><br><br>
        </tr>
      </thead>
    </table>