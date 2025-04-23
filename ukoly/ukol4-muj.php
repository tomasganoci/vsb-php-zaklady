<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - úkol číslo 4</title>
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
    $rozmer = 11;
    echo "<table>";
    for ($radek = 0; $radek < $rozmer; $radek++) {
        if ($radek === 0) {
            echo "<tr>";
            for ($sloupec = 0; $sloupec < $rozmer; $sloupec++) {
                echo "<th>" . ($sloupec) . "</th>";
            }
            echo "</tr>";
        } else {
            echo "<tr>";
            for ($sloupec = 0; $sloupec < $rozmer; $sloupec++) {
                if ($sloupec === 0) {
                    echo "<th>" . ($radek) . "</th>";
                } else {
                    echo "<td>" . ($sloupec * $radek) . "</td>";
                }
            }
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
</body>

</html>