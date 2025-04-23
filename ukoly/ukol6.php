<!DOCTYPE html>
<html lang="en">

<!-- Vytvořte skript, který vygeneruje stejnou tabulku jako v úloze 1, ale text každého sudého
řádku bude modrý a text každého lichého řádku bude červený. K obarvení textu použijte
CSS, pro jednoduchost se může jednat o inline styl. -->

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
        .blue-bcg {
            background-color: aqua;
        }
        .red-bcg {
            background-color: magenta;
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
                <tr class=<?php echo ($i % 2 == 0 ? "blue-bcg" : "red-bcg") ?>>
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