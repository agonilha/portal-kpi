<?php

session_start();

// Checa se o usuário está logado
if(!isset($_SESSION['logged_in'])) {
    // Redireciona para a página de login
    header('Location: ./view/login.php');
    exit();
}