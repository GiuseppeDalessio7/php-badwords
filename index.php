<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Inserimento Dati</h1>
    <form action="script.php" method="GET">
        <textarea name="paragrafo" id="paragrafo" cols="30" rows="3" placeholder="inserisci qui il tuo paragrafo"></textarea>
        <input type="text" name="parola" id="parola" placeholder="inserisci qui la tua parola">
        <input class="btn btn-primary" type="submit" value=" Clicca per inviare">
    </form>
</body>

</html>