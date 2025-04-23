<!DOCTYPE html>
<html lang="en">

<!-- Upravte příklad číslo 1 tak, aby se použil jiný druh cyklu. -->

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
    <title>ukol 2</title>
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
            $i = 1;
            while ($i <= 10) {
                ?>
                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>
                    <td>
                        <?php echo $i * 7; 
                            $i++;
                        ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>