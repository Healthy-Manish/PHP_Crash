<?php

// echo- Output strings, numbers, html,etc
    // echo 'HELLO1',123,10.5;

    //print - works like echo , but only take in a single arguement
    // print 123;

    //print_r()- print single value and arrays
    // print_r([1,2,3]);

    // var_dump - returns more info like data type and length
    // var_dump(true);

    //var_export() = similiear to var_dump(). Outputs a string
    //representation of a variable
    var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo'post one ';
        ?>
    </h1>
</body>
</html>

