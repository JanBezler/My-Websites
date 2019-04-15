<?php
session_start();

if(isset($_POST['email']))
{
	//udana walidacja? Tak!
	$wszystko_ok=true;
	
	//nickname
	$nick=$_POST['nick'];
		//sprawdzenie długości nicki
	if((strlen($nick)<4)||(strlen($nick)>15))
	{
		$wszystko_ok=false;
		$_SESSION['e_nick']="Nick musi posiadać od 4 do 15 znaków!";
	}
		//alfanumeryczność nicku
	if(ctype_alnum($nick)==false)
	{
		$wszystko_ok=false;
		$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
	}
	
	//E-mail
	$email=$_POST['email'];
	$emailB=filter_var($email,FILTER_SANITIZE_EMAIL);
	if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)||($emailB!=$email))
	{
		$wszystko_ok=false;
		$_SESSION['e_email']="Podaj poprawny ades e-mail!";
	}
	
	//Password
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	if((strlen($pass1)<8)||(strlen($pass1)>15))
	{
		$wszystko_ok=false;
		$_SESSION['e_pass']="Hasło musi posiadać od 8 do 15 znaków!";
	}
	if($pass1!=$pass2)
	{
		$wszystko_ok=false;
		$_SESSION['e_pass']="Podane hasła nie są identyczne";
	}
	$hashpass=password_hash($pass1, PASSWORD_DEFAULT);
	
	//Checkbox
	if(!isset($_POST['regulamin']))
	{
		$wszystko_ok=false;
		$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
	}
	
	/* Bot ot not? RECAPTCHA
	$secret="6LcAPEEUAAAAAJHnbbykHHaDyw7tSLOyDIniBHhc";
	$recaptcha=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
	$odpowiedz=json_decode($recaptcha);
	if($odpowiedz->success==false)
	{
		$wszystko_ok=false;
		$_SESSION['e_bot']="Potwierdź, że nie jesteś robotem!";
	}*/
	
	
	//Zapamiętaj wprowadzone dane
	$_SESSION['fr_nick']=$nick;
	$_SESSION['fr_email']=$email;
	if(isset($_POST['regulamin']))$_SESSION['fr_regulamin']=true;
	
	//-------------------------- MySql ----------------------------------------------
	require_once"connect.php";
	mysqli_report(MYSQLI_REPORT_STRICT);
	try 
	{
		$polaczenie=new mysqli($host,$db_user,$db_password,$db_name);
		if($polaczenie->connect_errno!=0)
		{
			throw new Exception(mysqli_connect_errno());
		}
			else
			{
				//czy email już istnieje
				$result=$polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				if(!$result) throw new Exception($polaczenie->error);
				$ile_takich_maili=$result->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_ok=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}
				
				//czy nick już istnieje
				$result=$polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
				if(!$result) throw new Exception($polaczenie->error);
				$ile_takich_nickow=$result->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_ok=false;
					$_SESSION['e_nick']="Istnieje już konto o takim nicku!";
				}
				
						//wszystkie testy zaliczone!
						if($wszystko_ok==true)
						{
							mkdir ("/var/www/html/katalog/$diruser/$nick", 0777);
							if($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$hashpass', '$email')"))
							{
								$_SESSION['udanarejestracja']=true;
								header('Location: witamy.php');
							}
							else{throw new Exception($polaczenie->error);}
						}
										
				
				
				
				$polaczenie->close();
			}
	
	}
	catch(Exception $e)
	{
		echo'<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
	}
	
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
				<div class="head">Rejestracja</div>
			<div style="clear:both;"></div>
			<div class="content" style="font-size:15px; line-height:0.75cm;">
			
			
			<form method ="post">
	<input placeholder="Login" type="text" value="<?php 
	if (isset($_SESSION['fr_nick']))
	{	
		echo $_SESSION['fr_nick'];
		unset($_SESSION['fr_nick']);
	}
	?>" name="nick"/>
	<?php 
	if(isset($_SESSION['e_nick'])) 
	{
		echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
		unset($_SESSION['e_nick']);
	}
	?>
	<input placeholder="E-mail" type="text" value="<?php 	
	if (isset($_SESSION['fr_email']))
	{	
		echo $_SESSION['fr_email'];
		unset($_SESSION['fr_email']);
	}
	?>" name="email"/>
	<?php 
	if(isset($_SESSION['e_email'])) 
	{
		echo '<div class="error">'.$_SESSION['e_email'].'</div>';
		unset($_SESSION['e_email']);
	}
	?>
	<input placeholder="Hasło" type="password" name="pass1"/>
	<?php 
	if(isset($_SESSION['e_pass'])) 
	{
		echo '<div class="error">'.$_SESSION['e_pass'].'</div>';
		unset($_SESSION['e_pass']);
	}
	?>
	<input placeholder="Potwierdź hasło" type="password" name="pass2"/><br/>
	<label>
	<input type="checkbox" name="regulamin" <?php
	if(isset($_SESSION['fr_regulamin']))
	{
		echo"checked";
	}
	?>/><text style="font-size:22px !IMPORTANT;"> Akceptuję regulamin <a href="regulamin.php" class="link">(czytaj)</a></text>
	</label>
	<?php 
	if(isset($_SESSION['e_regulamin'])) 
	{
		echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
		unset($_SESSION['e_regulamin']);
	}
	?>
		<div style="clear:both;"></div>
	<input type="submit" value="Zarejestruj"/> <a href="pliki.php"><input type="button" value="Powrót na stronę logowania"/></a>
	
</form>

	
			</div>
			</div>	
		</div>
		<div class="string">1</div>
		<div style="clear:both;"></div>
		<div class="rectangle">2018 &copy Jan Bezler - Informatyk, elektronik zaprasza do współpracy!</div>	
	</div>
	
</body>
</html>
