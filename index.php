<?php

$TAGS = [
    "[b]" => "<b>",
    "[/b]" => "</b>",
    "[i]" => "<i>",
    "[/i]" => "</i>",
    "[u]" => "<ins>",
    "[/u]" => "</ins>",
    "[s]" => "<del>",
    "[/s]" => "</del>",
    "[code]" => "<pre>",
    "[/code]" => "</pre>",
    "[quote]" => "<blockquote>",
    "[/quote]" => "</blockquote>",
];

$text = null;

if (!empty($_POST["entry"])) {
    $text = $_POST["entry"];

    foreach ($TAGS as $key => $value) {
        $text = str_replace($key, $value, $text);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBCode to HTML</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1 class="center">BBCode to HTML</h1>
    <p>What's <a href="https://en.wikipedia.org/wiki/BBCode?useskin=vector" target="_blank">BBCode</a> ?</p>
    <p>BBCode is a markup language that is used to format posts in many message boards. The available tags are usually indicated by square brackets ([ ]) surrounding a keyword, and they are parsed by the message board system before being translated into a markup language that web browsers understand—usually HTML or XHTML.</p>
    <p>For example, to make a word appear bold, you surround it with [b] and [/b] tags. The word "bold" would appear as bold.</p>
    <h2>Supported tags</h2>
    <ul>
        <li>[b]bold[/b]</li>
        <li>[i]italic[/i]</li>
        <li>[u]underline[/u]</li>
        <li>[s]strikethrough[/s]</li>
        <li>[code]code[/code]</li>
        <li>[quote]quote[/quote]</li>
    </ul>
    <section class="main">
        <div class="left">
            <h2>BBCode Input</h2>
            <form action="index.php" method="post">
                <textarea id="entry" name="entry" type="text" placeholder="Enter BBCode here..."></textarea>
                <button type="submit">Convert</button>
            </form>
        </div>
        <div class="right">
            <h2>HTML Output</h2>
            <?php if($text == null) { ?>
                <div id="result" disabled></div>
            <?php } else { ?>
                <div id="result"><?= htmlspecialchars($text) ?></div>
            <?php } ?>
        </div>
    </section>
    <section id="preview">
        <h2>HTML Preview</h2>
        <div id="preview-container">
            <?php if($text !== null) { ?>
                <div id="preview-result"><?= $text ?></div>
            <?php } ?>
        </div>
    </section>
</body>
</html>