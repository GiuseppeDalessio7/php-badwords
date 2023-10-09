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
</head>

<body>
    <h1> Back end</h1>
    <h3>Questo è il paragrafo che mi è stato scritto:
        <?php echo $paragrafo; ?>
    </h3>
    <span>la lunghezza del paragrafo è di :
        <?php echo  strlen($lunghezzaParagraf); ?> caratteri </span>



    <h3>Questo è il paragrafo che mi è stato scritto:
        <?php echo $paragrafo; ?>
    </h3>
    <span>la lunghezza del paragrafo è di :
        <?php echo  strlen($lunghezzaParagraf); ?> caratteri </span>

    <h3>
        <span>La parola che verrà censurata è :
            <?php echo str_replace("$parola", "***", $_GET["parola"]); ?></span>
    </h3>

</body>

</html>

$str = "w3docs is W3docs";

// Word to be replaced
$w1 = "w3docs";

// Replaced by
$w2 = "W3DOCS";

// Using str_replace() function
// for replacing the word
$str = str_replace($w1, $w2, $str);

// Printing the result
echo $str;