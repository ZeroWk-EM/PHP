<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES || IF </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="icon" type="image/x-icon" href="asset/php.ico">

</head>

<body>
    <hr>
    <p class="to_index"><a href="../../index.html">Torna all'index</a></p>
    <hr>
    <div class="block">
        <div class="es">
            <h4>ES : Dati tre numeri 65,32,100</h4>
            <ul>
                <li>Trova il massiono e salvalo in una variabile</li>
                <li>Trova il minimo e salvalo in una variabile</li>
            </ul>
        </div>
    </div>
    <div class="elaboration">
        <p style="text-align:center">OUTPUT</p>
    </div>
    <div class="container">
        <div class="code">
            <?php
            $num1 = 65;
            $num2 = 32;
            $num3 = 100;

            $max = 0;
            $min = 0;
            echo "NUM 1 [" . $num1 . "]";
            echo " | NUM 2 [" . $num2 . "]";
            echo " | NUM 3 [" . $num3 . "]";

            echo "<br>";
            echo "<hr>";
            if ($num1 > $num2 && $num1 > $num3) {
                echo "Il numero [" . $num1 . "] è piu grande [" . $num2 . "] e [" . $num3 . "]";
                $max = $num1;
            } else {
                $min = $num1;
            }
            if ($num2 > $num1 && $num2 > $num3) {
                echo "Il numero [" . $num2 . "] è piu grande [" . $num1 . "] e [" . $num3 . "]";
                $max = $num2;
            } else {
                $min = $num2;
            }
            if ($num3 > $num1 && $num3 > $num2) {
                echo "Il numero [" . $num3 . "] è piu grande [" . $num1 . "] e [" . $num2 . "]";
                $max = $num3;
            } else {
                $min = $num3;
            }
            echo "<br>";
            echo "<hr>";
            echo "MAX [".$max."]";
            echo "MIN [".$min."]";
            ?>
        </div>
    </div>
    <hr>
    <p style="text-align:right;">FINITO XX/XX/20XX || XX:XX</p>
</body>

</html>