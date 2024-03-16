<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    function is_prime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i * $i <= $number; $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    function print_primes($start, $end) {
        for ($i = $start; $i <= $end; $i++) {
            if (is_prime($i)) {
                echo $i . " ";
            }
        }
    }

    $start = 1;
    $end = 100;

    echo "Liczby pierwsze w zakresie od $start do $end: ";
print_primes($start, $end);
?>
</body>
</html>

