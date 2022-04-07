<!-- 
Esercizio di oggi: PHP Badwords
nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php 
        $string = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim a recusandae illum ipsam magnam exercitationem quia id ut voluptatem veritatis. Soluta, ipsa. Exercitationem debitis laboriosam quod voluptatibus molestiae repudiandae reiciendis.";
    ?>

    <p><?php echo $string . "\n" . strlen($string); ?></p>
</body>
</html>