<?php

// Vérifier que le cookie existe
if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    echo "Login : " . $_COOKIE['login'] . " <br>Mot de passe :" . $_COOKIE['password'];
}