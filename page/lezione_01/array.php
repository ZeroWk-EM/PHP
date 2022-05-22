<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES || ARRAY</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../../asset/php.ico">

</head>

<body>
    <hr>
    <p class="to_index"><a href="../../index.html">Torna all'index</a></p>
    <hr>
    <div class="block">
        <div class="es">
            <h4>ES : Dato un array [2][5][7][9][11] trova:</h4>
            <ul>
                <li>La somma di tutti gli elementi e salvala in una variabile chiamata $SUM</li>
                <li>Il valore massimo dell'array e salva il risultato in $MAX</li>
                <li>Il valore minimo dell'array e salva il risultato in $MIN</li>
                <li>La media dei valori dell'array e salva il risultato in $MEDIA</li>
                <li>Il valore [10] e [7] e dire se sono presenti all'interno dell'array oppure no</li>
            </ul>
        </div>
    </div>
    <div class="elaboration">
        <p style="text-align:center">OUTPUT</p>
    </div>
    <div class="container">
        <div class="code">
            <?php
            //Dichiarazione array
            $array = array(2, 5, 7, 9, 11);
            $SUM = 0;
            $MAX = $array[0];
            $MIN = $array[0];

            $found = 10;
            $found2 = 7;

            for ($i = 0; $i < count($array); $i++) {
                //SOMMA
                $SUM = $SUM + $array[$i];
                //MAX
                if ($array[$i] > $MAX) {
                    $MAX = $array[$i];
                } //MIN 
                else if ($array[$i] < $MIN) {
                    $MIN = $array[$i];
                }
            }

            //MEDIA
            $MEDIA = $SUM / count($array);
            echo "La somma degli elelenti dell'array è [" . $SUM . "]";
            echo "<br>";
            echo "Il valore massimo dell'array è [" . $MAX . "]";
            echo "<br>";
            echo "Il valore minimo dell'array è [" . $MIN . "]";
            echo "<br>";
            echo "La media dei valori dell'array è [" . $MEDIA . "]";
            echo "<br>";

            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] == $found) {
                    echo "TROVATO il numero [" . $found . "] è presente nell'array su l'indice [" . $i . "]";
                    echo " e mi dispiace ma il numero [" . $found2 . "] non c'è";
                } else if ($array[$i] == $found2) {
                    echo "Trovato il numero [" . $found2 . "] è presente nell'array su l'indice [" . $i . "]";
                    echo " e mi dispiace ma il numero [" . $found . "] non c'è";
                }
            }
            ?>
        </div>
    </div>
    <hr>
    <p style="text-align:right;">FINITO 20/05/2022 || 13:33</p>
</body>

</html>