<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
$parola = $_GET["parola"];
$frase = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit veritatis obcaecati iure fugiat, quam libero nobis? Fuga obcaecati repudiandae, ad quos explicabo autem doloremque saepe exercitationem architecto deleniti, tempore debitis?";
$fraseCensurata = str_replace($parola, "***", $frase);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Php badwords</title>
	</head>
	<body>
		<h2>Frase</h2>
		<p><?php echo $frase; ?></p>
		<h4>Lunghezza: <?php echo strlen($frase); ?></h4>
		<hr>
		<h2>Frase Censurata</h2>
		<p><?php echo $fraseCensurata; ?></p>
		<h4>Lunghezza: <?php echo strlen($fraseCensurata); ?></h4>
	</body>
</html>