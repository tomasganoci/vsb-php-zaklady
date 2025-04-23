<!DOCTYPE html>

<!-- Vytvořte skript, který vygeneruje číslovaný seznam (HTML značky OL / LI), kde prvky
seznamu budou řetězce „Prvek 1“, „Prvek 2“, atd ... -->


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ukol 5</title>
</head>

<body>
    <ol>
        <?php
            $pocet = 15;
            for ($i = 1; $i <= $pocet; $i++) {
        ?>
            <li>Polozka <?php echo $i ?></li>
        <?php
            }
        ?>
    </ol>
</body>

</html>