<?php

    include('/php/db.php');

    $email = $_POST['usuario'];
    $senha = $_POST['senha'];
    $enviar = $_POST['entrar'];

    $sql_email = "SELECT * FROM cadastrados WHERE usuario = '$email'";
    $sql_senha = "SELECT * FROM cadastrados WHERE senha = '$senha'";
    $resul_email = mysqli_query($conn, $sql_email);
    $resul_senha = mysqli_query($conn, $sql_senha);

    if(isset($enviar)){
        if(mysqli_num_rows($resul_email)>0 and mysqli_num_rows($resul_senha)>0){
            header("Location: /html/home.html");
        }
        elseif(mysqli_num_rows($resul_email)==0){
            // código para email não cadastrado
            echo "email não cadastrado";
        }
        elseif(mysqli_num_rows($resul_email)>0 and mysqli_num_rows($resul_senha)==0){
            // código para senha incorreta)
            echo "senha incorreta";
        }
    }
    
    

?>