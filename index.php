<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <h1>Inserimento Dati</h1>
    <form action="script.php" method="GET">
        <textarea name="paragrafo" id="paragrafo" cols="30" rows="3" placeholder="inserisci qui il tuo paragrafo"></textarea>
        <input type="text" name="parola" id="parola" placeholder="inserisci qui la tua parola">
        <input type="submit" value=" Clicca per inviare">



    </form>
</body>

</html>


Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server tramite il form (occhio a quato detto stamattina sui form e gli attributi necessari).
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare