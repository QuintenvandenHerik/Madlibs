<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Madlibs.css">
</head>
<body>
	<h1>Madlibs</h1>
	<div class="links">
		<a href="Paniek.php">Er heerst paniek...</a>
		<a href="Onkunde.php">Onkunde</a>
	</div>
	<div class="collum">
		<h2>Er heerst paniek...</h2>
		<p>Er heerst paniek in het koninkrijk <?php echo $_POST["Country"]; ?>. Koning <?php echo $_POST["Truant"]; ?> is ten einde raad en als koning <?php echo $_POST["Truant"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["Important"]; ?>.</p>
		<br>
		<p>"<?php echo $_POST["Important"]; ?>! Het is een ramp! Het is een schande!"</p>
		<br>
		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
		<br>
		<p>"Mijn <?php echo $_POST["Animal"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["Toys"]; ?> voor hem gekocht!"</p>
		<br>
		<p>"Majesteit, uw <?php echo $_POST["Animal"]; ?> komt vast vanzelf weer terug?"</p>
		<br>
		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["Hobby"]; ?> leren?"</p>
		<br>
		<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["Rich"]; ?> voor gebruiken."</p>
		<br>
		<p>"<?php echo $_POST["Important"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
		<br>
		<p>"<?php echo $_POST["Bored"]; ?>, Sire."</p>
	</div>
	<div class="copyright">
		<p>Deze pagina is gemaakt door: Quinten v.d. Herik</p>
	</div>
</body>
</html>
