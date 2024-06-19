<?php

    //print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r($email);
        //print_r($senha);

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            header('Location: cadastro.php');
        }
        else
        {
            header('Location: comprar.php');
        }
    }
    else
    {
        header('Location: login.php');
    }
?>