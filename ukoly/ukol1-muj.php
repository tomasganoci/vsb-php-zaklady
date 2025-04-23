<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - úkol číslo 1</title>
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
    echo "<table>";
    echo "<tr>";
    echo "<th>Pořadí</th>";
    echo "<th>Název</th>";
    echo "</tr>";
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";
        echo "<td>řádek</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>