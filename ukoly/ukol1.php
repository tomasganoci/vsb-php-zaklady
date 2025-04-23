<!DOCTYPE html>
<html lang="en">

<!-- Vytvořte skript, který vygeneruje tabulku s dvěma sloupci (dodejte jim nějaké záhlaví) a
deseti řádky, kde v každém řádku bude v prvním sloupci pořadové číslo řádků a ve
druhém slovo řádek. Ke generování řádků využijte cyklus. -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table,
        td,
        th {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
    <title>ukol 1</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>pořadí</th>
                <th>násobky</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 10; $i++) {
            ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $i * 7; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>