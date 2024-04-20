<?php

function factorialRecursive($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorialRecursive($n - 1);
    }
}

function factorialNonRecursive($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$n = intval(readline("Podaj liczbę: "));

$start = microtime(true);
$result = factorialRecursive($n);
$end = microtime(true);
$timeRecursive = $end - $start;
echo "Czas działania funkcji rekurencyjnej: $timeRecursive sekund\n";

$start = microtime(true);
$result = factorialNonRecursive($n);
$end = microtime(true);
$timeNonRecursive = $end - $start;
echo "Czas działania funkcji nierekurencyjnej: $timeNonRecursive sekund\n";

if ($timeRecursive < $timeNonRecursive) {
    $difference = $timeNonRecursive - $timeRecursive;
    echo "Funkcja rekurencyjna była szybsza o $difference sekund\n";
} else if ($timeRecursive > $timeNonRecursive) {
    $difference = $timeRecursive - $timeNonRecursive;
    echo "Funkcja nierekurencyjna była szybsza o $difference sekund\n";
} else {
    echo "Obie funkcje działały z takim samym czasem\n";
}
?>