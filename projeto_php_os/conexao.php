<?php

    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $bd_name = 'o.s';

    //aqui conecta
    $connx = mysqli_connect($host, $user, $passwd, $bd_name);

    //parte de teste
    if($connx){
        echo 'Conectou';
    }else{
        echo 'erro';
    }
?>