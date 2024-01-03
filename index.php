<?php

$TAGS = [
    "[b]" => "<b>",
    "[/b]" => "</b>",
    "[i]" => "<i>",
    "[/i]" => "</i>",
];


if (!empty($_POST["entry"])) {
    $text = $_POST["entry"];

    foreach ($TAGS as $key => $value) {
        $text = str_replace($key, $value, $text);
    }

    echo $text;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Hello world</h1>
    <section>
        <div class="left">
            <form action="index.php" method="post">
                <textarea id="entry" name="entry" type="text" placeholder="BBCode"></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
        <div class="right">
            <p id="result"></p>
        </div>
    </section>
</body>
</html>