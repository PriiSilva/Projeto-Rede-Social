<?php

    $db_servidor = "localhost";
    $db_usuario = "root";
    $db_senha = "";
    $db_nome = "usuariosdb";

    $conn = new mysqli($db_servidor, $db_usuario, $db_senha, $db_nome);

    //Verificar conexão com o banco
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    

?>