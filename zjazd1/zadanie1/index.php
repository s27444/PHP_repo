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
        error_reporting(E_ERROR | E_PARSE);
        $array = ['Jabłko', 'Banan', 'Pomarańcza'];

        foreach ($array as $item) {
            $reversed_item = '';
            $length = 0;
            while ($item[$length] != '') {
                $length++;
            }

            for ($i = $length - 1; $i >= 0; $i--) {
                $reversed_item .= $item[$i];
            }

            $starts_with_p = ($item[0] == 'P' || $item[0] == 'p');

            echo '<div>' . $reversed_item ;
            if ($starts_with_p) {
                echo '- Słowo zaczyna się na literę P';
            }
            echo '</div>';
        }
    ?>
</body>
</html>

