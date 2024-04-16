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
    $quantity = $_POST['quantity'];
    for ($i = 0; $i < $quantity; $i++) {
        echo "<fieldset>";
        echo "<legend>Osoba ".($i+1)."</legend>";
        echo '<label for="name'.$i.'">Imię:</label>';
        echo '<input type="text" id="name'.$i.'" name="name'.$i.'" required><br><br>';
        echo '<label for="surname'.$i.'">Nazwisko:</label>';
        echo '<input type="text" id="surname'.$i.'" name="surname'.$i.'" required><br><br>';
        echo "</fieldset>";
    }
    ?>
    <input type="submit" value="Zarezerwuj">
</form>
</body>
</html>