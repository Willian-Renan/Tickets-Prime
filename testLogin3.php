<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit3']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM funcionarios WHERE emailfun = '$email' and senhafun = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['emailfun']);
            unset($_SESSION['senhafun']);
            header('Location: login3.php');
        }
        else
        {
            $_SESSION['emailfun'] = $email;
            $_SESSION['senhafun'] = $senha;
            header('Location: formularioFunc.php');
        }
    } 
    else
    {
        // Não acessa
        header('Location: login3.php');
    }
?>