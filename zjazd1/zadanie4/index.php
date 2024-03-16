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
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

$words_array = explode(" ", $text);

$count = count($words_array);
for ($i = 0; $i < $count; $i++) {

    if (strpos($words_array[$i], '.') !== false || strpos($words_array[$i], ',') !== false) {
        unset($words_array[$i]);
    }
}


$words_array = array_values($words_array);

$associative_array = [];
$count = count($words_array);
for ($i = 0; $i < $count - 1; $i += 2) {
    $associative_array[$words_array[$i]] = $words_array[$i + 1];
}

foreach ($associative_array as $key => $value) {
    echo '<div>'.$key . " => " . $value . "</div>";
}
?>
</body>
</html>

