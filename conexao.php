<?php
    $hostname ='localhost';
    $user = 'root';
    $password = '';
    $database ='sml_bd';
    $conexao = mysqli_connect($hostname,$user,$password,$database);

    if (!$conexao){
        echo "Falha na conexao com o banco de dados"; 
    }
?>