<?php



if (!empty($_POST["entry"])) {

    foreach (str_split($_POST["entry"]) as $char) {
        echo $char . "<br>";
    }

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
                <input id="entry" name="entry" type="text" placeholder="BBCode">
            </form>
        </div>
        <div class="right">
            <p id="result"></p>
        </div>
    </section>
</body>
</html>