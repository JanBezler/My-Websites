<?php
session_start();

	
	
	if(!isset($_SESSION['udanarejestracja']))
		{
		header('Location:pliki.php');
		exit();
		}
		else unset($_SESSION['udanarejestracja']);
		
		//usuwamy zmienne pamiętanych wartości do formularza
		
		if(isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
		if(isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
		if(isset($_SESSION['fr_pass1'])) unset($_SESSION['fr_pass1']);
		if(isset($_SESSION['fr_pass2'])) unset($_SESSION['fr_pass2']);
		if(isset($_SESSION['fr_regulami'])) unset($_SESSION['fr_nregulamin']);
		
		
		
		//usuwamy błędy rejestracji
		if(isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
		if(isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
		if(isset($_SESSION['e_haslo']) )unset($_SESSION['e_haslo']);
		if(isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
		// RECAPTCHA if(isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);//

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Yoxu entertainment</title>
	<meta name="description" content="To autorska strona internetowa Jana Bezlera"/>
	<meta name="keywords" content="yoxu, yoxutv, Jan Bezler, jan bezler"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&amp;subset=latin-ext" rel="stylesheet" type="text/css">
	<script src="timer.js"></script>
</head>
<body onload="odliczanie();">
	<div id="container">
		<div class="rectangle">
			<div id="logo"><a href="index.html" class="logolink"><i class="icon-home"></i>Yoxu</a></div>
			<div id="zegar">12:00:00</div>
			<div style="clear:both;"></div>
		</div>		
		
		<div class="cont1">
			<div class="tile1"><a href="kimjestem.html" class="tilelink"><i class="icon-user"></i></br>Kim jestem</a></div>
			<div style="clear:both;"></div>
			<div class="tile2"><a href="oferta.html" class="tilelink"><i class="icon-laptop"></i></br>Co oferuję</a></div>
			<div style="clear:both;"></div>
			<div class="tile3"><a href="kontakt.html" class="tilelink"><i class="icon-phone"></i></br>Kontakt</a></div>
			<div style="clear:both;"></div>
			<div class="tile4"><a href="pliki.php" class="tilelink"><i class="icon-linux"></i></br>Pliki</a></div>
			
		</div>
		<div class="string">1</div>
		<div class="cont2">
			<div class="square">
				<div class="head">Logowanie na serwer plików</div>
			<div style="clear:both;"></div>
			<div class="content">

			
				<br/>Dziękuję za rejestrację, możesz już zalogować się na swoje konto!<br/>
				<a href="pliki.php"><input type="button" value="Powrót na stronę logowania"/></a>

			</div>
			</div>
		
		
		</div>
		<div class="string">1</div>
		<div style="clear:both;"></div>
		<div class="rectangle">2018 &copy Jan Bezler - Informatyk, elektronik zaprasza do współpracy!</div>	
	</div>

</body>
</html>