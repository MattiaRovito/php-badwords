<?php

    // Scrivere un testo
    $testo= 'Oggi è una bella giornata e ho deciso di leggere un libro in giardino';


    // Scrivere la sua lunghezza
    $lunghezzaTesto = strlen($testo);



    // Scrivere una parola da censurare
    $censura = $_GET['censura'];


    // Sostituire la parola da censurare con i 3 ***
    $fraseCensurata = str_replace($censura, '***', $testo);



    // Scrivere la lunghezza della parola censurata
    $lunghezzaTestoCensurato = strlen($fraseCensurata);




?> 












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<h1><?php echo $testo ?></h1>

<h2>La lunghezza del testo è di <?php echo $lunghezzaTesto ?> caratteri</h2>

<h2>La frase modificata:</h2>
<p>
    <?php echo $fraseCensurata?>
</p>
<p>
    La lunghezza del testo modificato è di: <?php echo $lunghezzaTestoCensurato ?> caratteri
    
</p>



</body>
</html>



<!-- Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.
 Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->




