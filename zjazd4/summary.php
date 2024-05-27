<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie Rezerwacji</title>
</head>
<body>
<h2>Podsumowanie Rezerwacji</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = count($_POST) / 2;
    echo "<p><strong>Liczba osób:</strong> $quantity</p>";

    for ($i = 0; $i < $quantity; $i++) {
        $name = $_POST["name$i"];
        $surname = $_POST["surname$i"];
        echo "<p><strong>Osoba ".($i+1).":</strong> $name $surname</p>";
    }
} else {
    echo "<p>Nieprawidłowe zapytanie HTTP.</p>";
}
?>
</body>
</html>