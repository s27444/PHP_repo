<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
<h2>Logowanie</h2>
<form action="login_check.php" method="post">
    <label for="username">Nazwa użytkownika:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Zaloguj">
</form>
</body>
</html>