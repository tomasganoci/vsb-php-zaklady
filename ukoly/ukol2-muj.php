<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - úkol číslo 2</title>
    <style>
        table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            border-spacing: 0;
            padding: 2px 3px;
        }
    </style>
</head>

<body>
    <?php
    $i = 0;
    echo "<table>";
    echo "<tr>";
    echo "<th>Pořadí</th>";
    echo "<th>Název</th>";
    echo "</tr>";
    do {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>řádek</td>";
        echo "</tr>";
        $i++;
    } while ($i < 10);
    echo "</table>";
    ?>
</body>

</html>