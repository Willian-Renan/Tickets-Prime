<?php
    session_start();
    unset($_SESSION['emailfun']);
    unset($_SESSION['senhafun']);
    header('Location: home.php');
?>