<?php

    include('/php/db.php');

    $email = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $enviar = $_POST['entrar'];

    $sql_nome = "SELECT * FROM cadastrados WHERE usuario = '$email'";
    $sql_senha = "SELECT * FROM cadastrados WHERE senha = '$senha'";
    $result = mysqli_query($conn, $sql_nome);
    $result_senha = mysqli_query($conn, $sql_senha);


    if(isset($enviar)){
        if(mysqli_num_rows($result)>0){
            //código para usuário existente
            echo "usuário existente";
        }
        elseif(mysqli_num_rows($result_senha)>0){
            echo "senha já existente";
        }
        elseif($senha != $senha2){
            //código para senhas diferentes
            echo "As senhas não batem";
        }
        else{
            
        }
    }

    $cadastro = "INSERT INTO cadastrados (usuario, senha) VALUES ('$email', '$senha')";

    if($conn->query($cadastro) == true){header("Location: /html/welcome.html");}
    

    

?>