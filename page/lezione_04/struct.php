<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES || FORM </title>
    <link rel="icon" type="image/x-icon" href="../../asset/php.ico">
</head>

<body>
    <?php
    if (isset($_GET['numero_persone'])) {
        $numero_persone = $_GET['numero_persone'];
    } else {
        $numero_persone = 0;
    }

    ?>

    <form action="struct.php" method="POST">
        <?php
        for ($i = 0; $i < $numero_persone; $i++) {
        ?>
            <input name="person[<?= $i ?>][userCF]" id="surname" placeholder="Inserisci il codice fiscale" required>
            <input name="person[<?= $i ?>][userName]" id="CF" placeholder="Inserisci il nome" required>
            <input name="person[<?= $i ?>][userSurname]" id="name" placeholder="Inserisci il cognome" required>
            <br>
        <?php
        }
        ?>
        <!-- ADD -->
        <a href='struct.php?numero_persone=<?= $numero_persone + 1 ?>'>AGGIUNGI</a>
        <!-- REMOVE -->
        <?php
        $value = $numero_persone - 1;
        if ($numero_persone > 0) {
            echo "<a href='struct.php?numero_persone=$value'>RIMUOVI</a>";
        }
        ?>
        <input type="submit" value="Invia form">
    </form>
    <?php
    //Creiamo un array vuoto chiamato array_m


    ?>
</body>

</html>