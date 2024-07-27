<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- css -->
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="container-generator d-flex ">
    <div class="text-center">
        <h1 class="first-h">Strong Password Generator</h1>

        <h2 class="second-h">Genera una password sicura</h2>
    </div>

    <div class="notifiche">
        <span>Notifiche per l'utente</span>
    </div>

    <div class="container-input">
        <form action="">
            <div>
                <div class="d-flex input-area-lunghezza">
                    <h4 class="first-input-h">Lunghezza password:</h4>
                    <div class="input-space">
                        <input type="number" name="pw-lenght" min="8" max="32" step="1">
                        <div>
                            <input type="radio" name="ripetizioni" value="si" checked="checked" id="si">
                            <label for="si">Sì</label>
                        </div>
                        <div>
                            <input type="radio" name="ripetizioni" value="no" id="no">
                            <label for="no">No</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex input-area-ripetizioni">
                    <h4>Consenti ripetizioni di uno o più caratteri:</h4>
                    <div class="input-space">
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
            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>
        </form>
    </div>
</body>

</html>