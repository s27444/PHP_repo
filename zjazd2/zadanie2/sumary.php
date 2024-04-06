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
    $quantity = $_POST['quantity'];
    echo "<p><strong>Liczba osób:</strong> $quantity</p>";

    for ($i = 0; $i < $quantity; $i++) {
        $name = $_POST["name$i"];
        $surname = $_POST["surname$i"];
        echo "<p><strong>Osoba ".($i+1).":</strong> $name $surname</p>";
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $credit_card = $_POST['credit_card'];
    $email = $_POST['email'];
    $stay_date = $_POST['stay_date'];
    $arrival_time = $_POST['arrival_time'];
    $child_bed = isset($_POST['child_bed']) ? 'Tak' : 'Nie';
    $amenities = isset($_POST['amenities']) ? implode(', ', $_POST['amenities']) : 'Brak';

    echo "<p><strong>Imię:</strong> $name</p>";
    echo "<p><strong>Nazwisko:</strong> $surname</p>";
    echo "<p><strong>Adres:</strong> $address</p>";
    echo "<p><strong>Nr karty kredytowej:</strong> $credit_card</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data pobytu:</strong> $stay_date</p>";
    echo "<p><strong>Godzina przyjazdu:</strong> $arrival_time</p>";
    echo "<p><strong>Dostawienie łóżka dla dziecka:</strong> $child_bed</p>";
    echo "<p><strong>Udogodnienia:</strong> $amenities</p>";
} else {
    echo "<p>Nieprawidłowe zapytanie HTTP.</p>";
}
?>
</body>
</html>
