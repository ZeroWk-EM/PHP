<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES || ARRAY MULTIDIMENSIONALI</title>
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
            <h4>ES : Creare un programma che permetta la gestione di un array multidimensionale</h4>
            <p>La chiave dell'array è rappresentato da un codice fiscale.
                Ogni elemento è un array associativo con le seguenti informazioni:
            <ul>
                <li>Nome</li>
                <li>Cognome</li>
                <li>Professione</li>
                <li>Citta</li>
                <li>Eta</li>
            </ul>

            Per generare e popolare l'array creare le seguenti funzioni:

            <ul>
                <li>popolareArray(N) <p>Dove N è il numero di elementi dell'array</p>
                </li>
                <li>generaNome(...)</li>
                <li>generaCognome(...)</li>
                <li>generaProfessione(...) </li>
                <li>generaCitta(...) </li>
                <li>generaEta(...) </li>
                <li>generaCF(...)</li>
            </ul>

            Un volta popolato l'array implementare e seguenti funzioni:
            <ul>
                <li>stampa(CF)</li>
                <li>stampaOrdineAlfabetico($ordine,...) <p>Ordine per definire se ordinare in modo decrescente o ascendente</p>
                </li>
                <li>stampaOrdineETA($ordine,...) <p>Ordine per definire se ordinare in modo decrescente o ascendente</p>
                </li>
                <li>ricercaPerNome(...)</li>
                <li>ricercaPerProfessione(...)</li>
                <li> eliminaPersona(...</li>
            </ul>
            </p>
        </div>
    </div>
    <div class="elaboration">
        <p style="text-align:center">OUTPUT</p>
    </div>
    <div class="container">
        <div class="code">
            <?php
<?php
include "database.php";

function generateName(){
    $list_name = getListName();
    return $list_name[rand(0,count($list_name)-1)];
}

function generateSurname(){
    $list_surname = getListSurname(); 
    return $list_surname[rand(0,count($list_surname)-1)];                
}

function generateProfession(){
    $list_profession = getListProfession();
    return $list_profession[rand(0,count($list_profession)-1)];
}

function generateCity(){
    $list_city = getListCity();
    return $list_city[rand(0,count($list_city)-1)];
}

function generateCF(&$list_CF){
    if(count($list_CF)!=0){
        $index_CF = rand(0,count($list_CF)-1);
        $CF = $list_CF[$index_CF];
        unset($list_CF[$index_CF]);
        $list_CF = array_values($list_CF);

        return $CF;
    }else{
        return null;
    };
}

function generateAge(){
    return rand(18,65);
}

function generateList($num_pers, $list_CF){
    if($num_pers>count($list_CF)){
        echo "<br>CF insufficenti<br>";
    }
    $list_people = array();
    for($i=0;$i<$num_pers;$i++){
        if(count($list_CF)!=0){
            $list_people[generateCF($list_CF)] = array("Name" => generateName(), "Surname" => generateSurname(), "Profession" => generateProfession(), 
                                                    "City" => generateCity(), "Age" => generateAge());
        }
    }
    return $list_people;
}

function printPers($pers, $key=null){
    if($pers!=null){
        if($key!=null) echo "$key <br>";
        foreach($pers as $value){
            echo "$value <br>";
        }
    }
}

function printList($list_people, $CF=null){
    if($CF!=null){
        foreach($list_people as $key => $value){
            if($key==$CF){
                printPers($value, $key);
                return;
            }
        }
        echo "<br>Codice fiscale non trovato<br>";
    }else{
        foreach($list_people as $key => $value){
            printPers($value, $key);
            echo "<br><br>";
        }
    }
}

function searchForName($list_people, $name){
    foreach($list_people as $value){
        if($value['Name']==$name) return $value;
    }
    return null;
}

function searchForProfession($list_people, $profession){
    foreach($list_people as $value){
        if($value['Profession']==$profession) return $value;
    }
    return null;
}

function printInOrder($list_people, $criterion='Surname' ,$order='ASC'){
    if($criterion!='Surname' && $criterion!='Name' && $criterion!='Age') $criterion = 'Surname';

    $temp_list = array();
    while(count($list_people)!=0){
        $minKey = array_rand($list_people);
        $min = $list_people[$minKey];
        foreach($list_people as $key => $value){
            if($order=='DESC'){
                if($value[$criterion]>$min[$criterion]){
                    $min = $value;
                    $minKey = $key;
                }
            }else{
                if($value[$criterion]<$min[$criterion]){
                    $min = $value;
                    $minKey = $key;
                }
            }
        }
        $temp_list[$minKey] = $min;
        unset($list_people[$minKey]);
    }
    printList($temp_list);
}

function deletePers(&$list_people,$CF){
    unset($list_people[$CF]);
}

function clearList(&$list_people){
    while(count($list_people)!=0){
        unset($list_people[array_rand($list_people)]);
    }
}

function main(){
    $list_CF = getListCF(); 

    $list_people = generateList(24, $list_CF);
    //deletePers($list_people, "NGNVRL63B67C709L");
    
    $pers = searchForName($list_people, "Samuel");
    echo "<br>".printPers($pers);
    $pers2 = searchForProfession($list_people, "Calciatore");
    echo "<br>".printPers($pers2);

    printInOrder($list_people, $criterion='Age', $order='ASC');  
}

main();

?>
            ?>
        </div>
    </div>
    <hr>
    <p style="text-align:right;">FINITO XX/XX/20XX || XX:XX</p>
</body>

</html>
