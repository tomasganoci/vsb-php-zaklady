<!DOCTYPE html>
<html>

<!-- Vytvořte skript, který vygeneruje tabulku s dvěma řádky a deseti sloupci. Jeden řádek
bude záhlaví obsahující texty „Položka 1“, „Položka 2“ atd.... a druhý řádek bude
obsahovat číslovky 1, 2, 3 …. Ke generování řádků využijte cykly.
Nápověda: Jeden cyklus nebude stačit. -->

<head>
    <meta charset="UTF-8">
    <style>
        table,
        td,
        th {
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px;
        }
    </style>
    <title>ukol 3</title>
</head>

<body>
    <table>
        <tr>
            <?php
            $celkem = 10;
            for ($i = 1; $i <= $celkem; $i++) {
                ?>

                <th>Položka
                    <?php echo $i; ?>
                </th>
                <?php
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 1; $i <= $celkem; $i++) {
                ?>
                <td>
                    <?php echo $i; ?>.
                </td>
                <?php
            }
            ?>
        </tr>
    </table>
</body>

</html>