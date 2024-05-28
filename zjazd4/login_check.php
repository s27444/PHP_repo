<?php

session_start();

$correct_username = 'admin';
$correct_password = 'password';

if ($_POST['username'] === $correct_username && $_POST['password'] === $correct_password) {
    $_SESSION['loggedin'] = true;
    setcookie('username', $correct_username, time() + 3600);
    header('Location: guests.php');
} else {
    echo "Nieprawidłowe dane logowania.";
}
