<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_COOKIE['quantity'])) {
        $quantity = $_COOKIE['quantity'];
        setcookie('quantity', '', time() - 3600);
        for ($i = 0; $i < $quantity; $i++) {
            setcookie("name$i", '', time() - 3600);
            setcookie("surname$i", '', time() - 3600);
        }
    }
    header('Location: guests.php');
}
?>