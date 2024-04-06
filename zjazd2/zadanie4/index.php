<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdź czy liczba jest liczbą pierwszą</title>
</head>
<body>
<h2>Sprawdź czy liczba jest liczbą pierwszą</h2>
<form action="" method="post">
    <input type="number" name="number" placeholder="Wpisz liczbę całkowitą dodatnią" required>
    <button type="submit">Sprawdź</button>
</form>

<?php
function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    if (!filter_var($number, FILTER_VALIDATE_INT) || $number <= 0) {
        echo "<p>Podana wartość nie jest liczbą całkowitą dodatnią.</p>";
    } else {
        $iterations = 0;
        if (isPrime($number)) {
            echo "<p>Liczba $number jest liczbą pierwszą.</p>";
        } else {
            echo "<p>Liczba $number nie jest liczbą pierwszą.</p>";
        }
        echo "<p>Ilość iteracji: $iterations</p>";
    }
}
?>
</body>
</html>