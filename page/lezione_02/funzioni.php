<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES || </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="icon" type="image/x-icon" href="asset/php.ico">

</head>

<body>
    <hr>
    <p class="to_index"><a href="../../index.html">Torna all'index</a></p>
    <hr>
    <div class="block">
        <div class="es">
            <h4>ES : Dato un'array [8][16][1][31][7] trova:</h4>
            <ul>
                <li>La somma di tutti gli elementi</li>
                <li>Il valore massimo dell'array</li>
                <li>Il valore minimo dell'array</li>
                <li>La media dei valori dell'array</li>
                <li>Il valore [10] e [7] e dire se sono presenti all'interno dell'array oppure no</li>
                <li>Ordinamento dell'array mediante Bubble Sort</li>
            </ul>
            <p>Esegui il tutto mediante l'utilizzo delle funzioni create da te</p>
        </div>
    </div>
    <div class="elaboration">
        <p style="text-align:center">OUTPUT</p>
    </div>
    <div class="container">
        <div class="code">
            <?php
            $array = array(8, 16, 1, 31, 7);

            //SOMMA
            function somma($array)
            {
                $ris = 0;
                for ($i = 0; $i < count($array); $i++) {
                    $ris += $array[$i];
                }
                return $ris;
            }

            //MAX
            function maxNum($array)
            {
                $max = $array[0];
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] > $max) {
                        $max = $array[$i];
                    }
                }
                return $max;
            }

            //MIN
            function minNum($array)
            {
                $min = $array[0];
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] < $min) {
                        $min = $array[$i];
                    }
                }
                return $min;
            }

            //MEDIA
            function media($array)
            {
                $ris = somma($array);
                $ris = $ris / count($array);
                return $ris;
            }

            function foundNumber($array, $found, $found2)
            {
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] == $found) {
                        echo "TROVATO il numero [" . $found . "] è presente nell'array su l'indice [" . $i . "]";
                        echo " e mi dispiace ma il numero [" . $found2 . "] non c'è";
                    } else if ($array[$i] == $found2) {
                        echo "Trovato il numero [" . $found2 . "] è presente nell'array su l'indice [" . $i . "]";
                        echo " e mi dispiace ma il numero [" . $found . "] non c'è";
                    }
                }
            }

            function sortingArray($array)
            {
                for ($i = 0; $i < count($array)-1; $i++) {
                    for ($j = 0; $j < count($array)-$i-1; $j++) {
                        if ($array[$j] > $array[$j + 1]) {
                            $tmp = $array[$j + 1];
                            $array[$j + 1]  = $array[$j];
                            $array[$j] = $tmp;
                        }
                    }    
                }
            return $array;
            }

            echo "La somma degli elelenti dell'array è [" . somma($array) . "]";
            echo "<br>";
            echo "Il valore massimo dell'array è [" . maxNum($array) . "]";
            echo "<br>";
            echo "Il valore minimo dell'array è [" . minNum($array) . "]";
            echo "<br>";
            echo "La media dei valori dell'array è [" . media($array) . "]";
            echo "<br>";
            echo  foundNumber($array, 10, 7);
            echo "<br>";
            $arr= sortingArray($array);
            echo "Ordinamento array ";
            for ($i = 0; $i < count($arr); $i++) {
                echo "[".$arr[$i]. "]";
            }
            
            ?>
        </div>
    </div>
    <hr>
    <p style="text-align:right;">FINITO XX/XX/20XX || XX:XX</p>
</body>

</html>