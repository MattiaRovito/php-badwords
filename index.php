<?php


$testo= 'Oggi è una bella giornata e ho deciso di leggere un libro in giardino';

$lunghezzaTesto = strlen($testo);





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




</body>
</html>



<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall'utente tramite parametro GET. 
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->