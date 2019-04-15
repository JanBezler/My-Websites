<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true))
		{
		header('Location:wykaz.php');
		exit();
		}
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
					<div style="line-height:0.75cm;">
					<form action="zaloguj.php" method="post">
							<input type="text" name="login" placeholder="Login"/>
							<!--Znika przy naciśnięciu: onfocus="this.placeholder=''" onblur="this.placeholder='Login'"-->
							<input type="password" name="haslo" placeholder="Hasło" />
							<!--Znika przy naciśnięciu: onfocus="this.placeholder=''" onblur="this.placeholder='Hasło'"-->
							<br/><input type="submit" value="Zaloguj"/> <br/> </form>
							<text style="margin-left:90px;">Lub</text>
							<br/><a href="rejestracja.php"><input type="submit" value="Zarejestruj się" style="padding:5px; margin-top:5px;"/></a>
					</div>
<?php
	if(isset($_SESSION['blad']))
	{
		echo $_SESSION['blad'];
		session_unset();
	}
?>

			</div>
			</div>
		
		
		</div>
		<div class="string">1</div>
		<div style="clear:both;"></div>
		<div class="rectangle">2018 &copy Jan Bezler - Informatyk, elektronik zaprasza do współpracy!</div>	
	</div>
	
	
	
	
</body>
</html>
