<?php

if(!isset($_GET['elsoszam']) || !isset($_GET['masodikszam']))
{
    $output = "ÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁÁ";
}
else{
    $a = $_GET['elsoszam'];
    $b = $_GET['masodikszam'];
    while($a != $b)
    {
        if($a > $b)
        {
            $a -= $b;
        }
        else
        {
            $b -= $a;
        }
        $output = $a;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $output;
    ?>
</body>
</html>