<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - úkol číslo 5</title>
    <style>
        li {
            border: 1px solid black;
            border-collapse: collapse;
            border-spacing: 0;
            padding: 2px 3px;
        }
    </style>
</head>

<body>
    <?php
    $radku = 20;
    echo "<ol>";
    for ($i = 1; $i <= $radku; $i++) {
        echo "<li>Prvek " . $i . "</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>