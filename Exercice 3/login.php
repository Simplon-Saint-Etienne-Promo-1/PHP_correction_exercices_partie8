<?php
session_start();
// Récupération des données du formulaire
$login = $_POST['login'];
$password = $_POST['password'];


setcookie('login', $login, time() + 3600, '/');
setcookie('password', $password, time() + 3600, '/');