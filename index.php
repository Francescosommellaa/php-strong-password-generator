<?php

require_once __DIR__ . '/function.php';

$listChars = [
    'qwertyuiopasdfghjklzxcvbnmQWERTYUIOIPASDFGHJKLZXCVBNM',
    '1234567890',
    '!?&%$<>^+-*/()[]{}@#_='
];


$allChars =  'qwertyuiopasdfghjklzxcvbnmQWERTYUIOIPASDFGHJKLZXCVBNM1234567890!?&%$<>^+-*/()[]{}@#_=';

$min = 8;
$max = 32;

if (isset($_GET['length']) && !empty($_GET['length'])) {
    if ($_GET['length'] < $min || $_GET['length'] > $max) {
        $output = "Errore: la password deve avere una lunghezza compresa fra $min e $max caratteri";
    } else {
        $lunghezzaPassword = $_GET["length"];
        $lettere = $_GET["lettere"] ?? false;
        $numeri = $_GET["numeri"] ?? false;
        $simboli = $_GET["simboli"] ?? false;
        $passwordGenerata = generatepassword($lunghezzaPassword, $lettere, $numeri, $simboli);
        $output = "la password generata è:" . htmlspecialchars($passwordGenerata);
    }
} else {
    $output = "Genera una password con una lunghezza compresa fra $min e $max caratteri";
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>

    <!-- css -->
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="container-generator d-flex ">
    <div class="text-center">
        <h1 class="first-h">Strong Password Generator</h1>

        <h2 class="second-h">Genera una password sicura</h2>
    </div>

    <div class="notifiche">
        <span><?php echo $output ?></span>
    </div>

    <div class="container-input">
        <form action="index.php" method="GET">
            <div>
                <div class="d-flex input-area-lunghezza">
                    <h4 class="first-input-h">Lunghezza password:</h4>
                    <input class="input-space" type="number" name="length" id="length">
                </div>

                <div class="d-flex input-area-ripetizioni">
                    <!-- <h4>Consenti ripetizioni di uno o più caratteri:</h4>
                    <div class="input-space">
                        <div>
                            <input type="radio" name="ripetizioni" value="si" checked="checked" id="si">
                            <label for="si">Sì</label>
                        </div>
                        <div>
                            <input type="radio" name="ripetizioni" value="no" id="no">
                            <label for="no">No</label>
                        </div> -->
                    <div>
                        <input type="checkbox" name="lettere" value="lettere" id="lettere">
                        <label for="lettere">Lettere</label>
                    </div>

                    <div>
                        <input type="checkbox" name="numeri" value="numeri" id="numeri">
                        <label for="numeri">Numeri</label>
                    </div>

                    <div>
                        <input type="checkbox" name="simboli" value="simboli" id="simboli">
                        <label for="simboli">Simboli</label>
                    </div>
                </div>
            </div>
    </div>
    <button type="submit" name="submit" value="" class="btn btn-primary">Invia</button>
    <button type="reset" class="btn btn-secondary">Annulla</button>
    </form>
    </div>
</body>

</html>