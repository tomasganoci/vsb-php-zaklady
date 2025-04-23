<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>

<body>
    <?php


    $string = "Hello, world!";
    $number = 42;
    $array = array(1, 2, 3);
    $object = new stdClass();
    $object->name = 'Jmeno objektu';
    $object->id = 1;

    echo "<p>";
    var_dump($string);
    echo "</p><p>";
    var_dump($number);
    echo "</p><p>";
    var_dump($array);
    echo "</p><p>";
    var_dump($object);
    echo "</p>";
    ?>
</body>

</html>