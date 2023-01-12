<?php

// Vérifier que le cookie existe
if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    
    // Modification du cookie
    setcookie('login', 'Administrateur', 0);
    setcookie('password', '987654', 0);

    $login = $_COOKIE['login'];
    $password = $_COOKIE['password'];

    echo "Nouveau coockie => login : $login<br>Mot de passe : $password";
}