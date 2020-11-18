<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 34;
    $b = 50;
    echo "1. ",$a, " ", $b, "<br>";
    $a ^= $b;
    echo "<br>";
    echo "2. ",$a, " ", $b, "<br>";
    $b ^= $a;
    echo "<br>";
    echo "3. ",$a, " ", $b, "<br>";
    $a ^= $b;
    echo "<br>";
    echo "4. ",$a, " ", $b, "<br>";    
    ?>
</body>

</html>