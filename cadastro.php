<?php

    include("banco.php");

    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO cadastrados (usuario, senha) VALUES ('$email', '$senha')";

    mysqli_query($connect, $sql);

    mysqli_close($connect);

    header("Location: pag_login.php");
?>