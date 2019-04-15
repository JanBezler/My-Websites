<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>Yoxu - Strona Główna</title>
<?php include("head.html");?>
	<div class="cont">
<!------------------------------------------------Content------------------------------------------->
<article><header><h2 style="font-size:38px;">Ciekawe rozwiązania z zakresu</h2>
<h1>elektroniki, informatyki, mechatroniki</h1><br/><br/><br/><br/></header>

<h2>Wymyślmy, w jaki sposób można stworzyć coś z niczego, czyli budżetowe rozwiązania, które nie idą w myśl zasady <br/>„Działa, to nie ruszaj”! </h2>
</article>
Już <?php
function odczytaj($plik)
{
clearstatcache();
$wp = @ fopen($plik, 'r');
if (!$wp) return false;
flock($wp, 1);
$returner = @ fread($wp, filesize($plik));
flock($wp, 3);
fclose($wp);

return $returner;
}
function zapisz($plik, $zawartosc)
{
clearstatcache();
$wp = @ fopen($plik, 'a');
if (!$wp) return false;
flock($wp, 2);
fseek($wp, 0);
ftruncate($wp, 0);
$returner = @ fwrite($wp, $zawartosc);
fflush($wp);
flock($wp, 3);
fclose($wp);

return $returner;
}

$plik_licznika = 'licznik.txt';
$licznik = odczytaj($plik_licznika);
$licznik++;
if ($licznik !== FALSE) zapisz($plik_licznika, $licznik);
echo $licznik;
?> odwiedzin!
<!------------------------------------------------Content------------------------------------------->
	</div>
</main>
<?php include("stopka.html");?>
<script src="sticky.js"></script>
</body>
</html>