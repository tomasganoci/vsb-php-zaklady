<!DOCTYPE html>
<html lang="en">

<!-- Vytvořte skript, který vygeneruje tabulku sloužící k rychlému nalezení součinu dvou čísel.
Tabulka bude mít rozměr 11 x 11, kde 1, řádek a první sloupec bude záhlaví obsahující
čísla 1 – 10. V každé další buňce tabulky pak bude součin čísla v prvním řádku a 1,
sloupci. -->

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
    <title>ukol 4</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php
                $pocet = 10;
                for ($i = 0; $i <= $pocet; $i++) {
                ?>
                    <th>
                        <?php echo $i; ?>
                    </th>
                <?php
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $pocet = 10;
            for ($row = 1; $row <= $pocet; $row++) {
            ?>
                <tr>
                    <th>
                        <?php echo $row; ?>
                    </th>
                    <?php
                    for ($col = 1; $col <= $pocet; $col++) {
                    ?>
                        <td>
                            <?php echo $col * $row; ?>
                        </td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>