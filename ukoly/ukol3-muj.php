<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - úkol číslo 3</title>
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
    $pocetSloupcu = 10;
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    for ($i = 0; $i < $pocetSloupcu; $i++) {
        echo "<th>Položka " . ($i + 1) . "</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    echo "<tr>";
    for ($i = 0; $i < $pocetSloupcu; $i++) {
        echo "<td>" . ($i + 1) . "</td>";
    }
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    ?>
</body>

</html>