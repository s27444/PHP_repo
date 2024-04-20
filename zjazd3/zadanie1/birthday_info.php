<?php

if (isset($_GET['birthdate'])) {
    $birthdate = new DateTime($_GET['birthdate']);

    echo 'Dzień tygodnia urodzenia: ' . getDayOfWeek($birthdate) . "<br>";
    echo 'Ukończone lata: ' . getAge($birthdate) . "<br>";
    echo 'Ilość dni do najbliższych urodzin: ' . getDaysUntilNextBirthday($birthdate) . "<br>";
}

function getDayOfWeek($birthdate) {
    $daysOfWeek = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
    return $daysOfWeek[$birthdate->format('w')];
}
function getAge($birthdate) {
    $today = new DateTime();
    $interval = $today->diff($birthdate);
    return $interval->y;
}
function getDaysUntilNextBirthday($birthdate) {
    $today = new DateTime();
    $nextBirthday = new DateTime($birthdate->format('m-d') . '-' . $today->format('Y'));
    if($today > $nextBirthday) {
        $nextBirthday->modify('+1 year');
    }
    $interval = $today->diff($nextBirthday);
    return $interval->days;
}
