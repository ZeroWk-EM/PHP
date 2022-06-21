<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES || FORM </title>
    <link rel="stylesheet" href="../css/form.css">
    <link rel="icon" type="image/x-icon" href="../../asset/php.ico">
</head>

<body>
    <div class="container">
        <h2>FORM</h2>
        <hr>
        <div class="form_container">
            <?php
            if (isset($_GET['numero_persone'])) {
                $numero_persone = $_GET['numero_persone'];
            } else {
                $numero_persone = 0;
            }
            ?>
            <form action="form.php" method="post">
                <?php
                for ($i = 0; $i < $numero_persone; $i++) {
                ?>
                    <input name="person[<?= $i ?>][userName]" placeholder="Inserisci nome" required />
                    <input name="person[<?= $i ?>][userSurname]" placeholder="Inserisci cognome" required />
                    <hr class="sub_form">
                <?php
                }
                ?>
                <div class="btn_container">
                    <a href='form.php?numero_persone=<?= $numero_persone + 1 ?>'>AGGIUNGI</a>
                    <?php
                    $value = $numero_persone - 1;
                    if ($numero_persone > 0) {
                        echo "<a class= 'redbtn' href='form.php?numero_persone=$value'>RIMUOVI</a>";
                    }
                    $azzera = $numero_persone - $numero_persone;
                    if ($numero_persone >= 3) {
                        echo "<a class= 'purplebtn' href='form.php?numero_persone=$azzera'>RIMUOVI TUTTO</a>";
                    }
                    ?>
                    <div class="submit_form">
                        <input type="submit" value="INVIA">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="output_container">
        <h2>OUTPUT FORM</h2>
        <hr>
        <?php
        if ($_POST) {
            foreach ($_POST['person'] as $person) {
                echo "<p class = 'out_text'>" . $person['userName'] . " " . $person['userSurname'] . "</p>";
            }
        }
        ?>
    </div>
</body>

</html>