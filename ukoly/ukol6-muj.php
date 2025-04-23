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
            padding: 2px 3px;
        }
    </style>
</head>

<body>
    <?php
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Pořadí</th>";
    echo "<th>Název</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr style=\"" . ($i % 2 === 0 ? "color:#00f" : "color:#f00") .  "\">";
        echo "<td>" . ($i) . "</td>";
        echo "<td>řádek</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>