<?php


$paragrafo = $_GET["paragrafo"];
$parola =  $_GET["parola"];

var_dump($paragrafo);
var_dump($parola);

$lunghezzaParagraf = $_GET["paragrafo"];
$lunghezza = strlen($lunghezzaParagraf);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back End</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <h1> Back end</h1>
    <h3>Questo è il paragrafo che mi è stato scritto:
        <span class="text-danger"><?php echo $paragrafo; ?></span>

    </h3>
    <p>la lunghezza del paragrafo è di :
        <span class="text-danger"><?php echo  strlen($lunghezzaParagraf); ?></span> caratteri
    </p>

    <h3>Questo è il paragrafo che mi è stato scritto:
        <span class="text-danger"><?php echo $paragrafo; ?></span>
    </h3>
    <p>la lunghezza del paragrafo è di :
        <span class="text-danger"><?php echo strlen($lunghezzaParagraf); ?></span> caratteri
    </p>

    <h3>
        <p>La parola che verrà censurata è :
            <span class="text-danger"><?php echo str_replace("$parola", "***", $_GET["parola"]); ?></span>
        </p>

        <!-- inserire la parola, poi ciò con cui deve essere sostituita, e infine sostiurla -->
    </h3>

</body>

</html>