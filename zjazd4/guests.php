<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    echo "Nie masz dostępu do tej części strony. Proszę się zalogować.";
    echo "<a href='login.php'>Zaloguj</a>";
    echo "<a href='index.html'>Powrót</a>";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST['quantity'];
    setcookie('quantity', $quantity, time() + 3600);
    for ($i = 0; $i < $quantity; $i++) {
        setcookie("name$i", $_POST["name$i"], time() + 3600);
        setcookie("surname$i", $_POST["surname$i"], time() + 3600);
    }
}

$quantity = $_COOKIE['quantity'] ?? '';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz Rezerwacji Hotelu</title>
</head>
<body>
<h2>Formularz Rezerwacji Hotelu</h2>
<form action="summary.php" method="post">
    <?php
    for ($i = 0; $i < $quantity; $i++) {
        echo "<fieldset>";
        echo "<legend>Osoba ".($i+1)."</legend>";
        echo '<label for="name'.$i.'">Imię:</label>';
        echo '<input type="text" id="name'.$i.'" name="name'.$i.'" value="'.($_COOKIE["name$i"] ?? '').'" required><br><br>';
        echo '<label for="surname'.$i.'">Nazwisko:</label>';
        echo '<input type="text" id="surname'.$i.'" name="surname'.$i.'" value="'.($_COOKIE["surname$i"] ?? '').'" required><br><br>';
        echo "</fieldset>";
    }
    ?>
    <input type="submit" value="Zarezerwuj">
</form>
<form action="clear.php" method="post">
    <input type="submit" value="Wyczyść formularz">
</form>
</body>
</html>