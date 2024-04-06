<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator</title>
</head>
<body>
<form action="" method="post">
    <input type="number" name="num1" placeholder="Wpisz pierwszą liczbę">
    <input type="number" name="num2" placeholder="Wpisz drugą liczbę">
    <select name="operator">
        <option value="add">Dodawanie</option>
        <option value="subtract">Odejmowanie</option>
        <option value="multiply">Mnożenie</option>
        <option value="divide">Dzielenie</option>
    </select>
    <button type="submit">Oblicz</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (!empty($num1) && !empty($num2)) {
        switch ($operator) {
            case "add":
                $result = $num1 + $num2;
                echo "Wynik dodawania: $result";
                break;
            case "subtract":
                $result = $num1 - $num2;
                echo "Wynik odejmowania: $result";
                break;
            case "multiply":
                $result = $num1 * $num2;
                echo "Wynik mnożenia: $result";
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "Wynik dzielenia: $result";
                } else {
                    echo "Nie można dzielić przez zero!";
                }
                break;
            default:
                echo "Niepoprawny operator";
        }
    } else {
        echo "Wpisz obie liczby!";
    }
}
?>
</body>
</html>