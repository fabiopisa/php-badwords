<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Badwords</title>
</head>
<body>
<!-- Esercizio di oggi: PHP Badwords
nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
  <?php

$paragraph = "Nel pattinaggio artistico su ghiaccio, nome di alcuni esercizi facenti parte delle 17 figure obbligatorie di scuola, che vengono eseguiti prima su uno e poi sull'altro piede, descrivendo un tracciato simile a due cerchi giustapposti.";
$wordCensure = $_GET['word'];
$newParagraph = str_replace($wordCensure, '***', $paragraph);

  ?>

  <p><?php echo $paragraph ?></p>
  <h3>Lunghezza paragrafo: <?php echo strlen($paragraph) ?></h3>
  <hr>
  <p><strong>Paragrafo modificato:</strong> <?php echo $newParagraph ?></p>
  <h3>Lunghezza nuovo paragrafo: <?php echo strlen($newParagraph) ?></h3>
  <h3>Parola censurata: <?php echo $wordCensure ?></h3>
</body>
</html>