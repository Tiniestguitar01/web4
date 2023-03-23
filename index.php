<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Prodzsekt</title>
</head>
<body>
    <h1>1.feladat</h1>
    <table>
    <?php

        for($i=1;$i<11;$i++)
        {
            echo "<tr>  </tr>";
            for($j=1;$j<11;$j++)
            {
                $result = $i*$j;
                echo "<td> ${j} * ${i} = ${result} </td>";
            }
        }
    ?>
    </table>

    <h1>2.feladat</h1>
    <form action = "lnko.php" method = "GET">
        <label>Adja meg az első számot!</label>
        <input type="text" name="elsoszam" pattern="*[1-9][0-9]{3}[0-9]*" required> (&ge; 1000)
        <br></br>
        <label>Adja meg az második számot!</label>
        <input type="text" name="masodikszam" pattern="*[1-9][0-9]{3}[0-9]*" required> (&ge; 1000)
        <br></br>
        <input type="submit">
    </form>
    <h1>3.feladat</h1>
    <form action = "lnko.php" method = "GET">
        <input type="text" name="elsoszam" pattern="*[1-9][0-9]{3}[0-9]*" required>
        <input type="text" name="masodikszam" pattern="*[1-9][0-9]{3}[0-9]*" required>
        <input type="text" name="masodikszam" pattern="*[1-9][0-9]{3}[0-9]*" required>
        <input type="submit">
    </form>
</body>
</html>