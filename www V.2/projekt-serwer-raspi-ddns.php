<!DOCTYPE HTML>
<html lang="pl">
<head>
<title>Yoxu - Strona Główna</title>
<?php include("head.html");?>
	<div class="cont">
<!------------------------------------------------Content------------------------------------------->
<article>
<h2>Własny serwer na RasPi z DDNS</h2>
<p>
<h3>Do czego możemy użyć naszej malinki? Na przykład do hostowania naszej własnej strony internetowej! Dziś pokażę, jak umieścić naszą stronę w internecie oraz jak skonfigurować Dynamiczny DNS na No-IP.com</h3><br/>

<h3>Poniżej znajduje się film instruktażowy wraz z komendami pod nim</h3>

<iframe width="560" height="315" src="https://www.youtube.com/embed/iSx0RvXkQP4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

<h3>Najpierw należy pobrać pliki<br/></h3>

<i>sudo apt-get update<br/>
sudo apt-get install apache2</i><br/>

<h3>Teraz musimy zmienić grupę i użytkownika Apache2 w tym czelu otwieramy envvars<br/></h3>
<i>cd /etc/apache2<br/>
sudo nano envvars</i><br/>

<h3>Następnie podmieniamy ustawienia podane poniżej<br/></h3>

<i>export APACHE_RUN_USER=pi<br/>
export APACHE_RUN_GROUP=pi</i><br/>

<h3>Ustawiamy servername na localhost<br/></h3>
<i>sudo nano httpd.conf --> ServerName localhost</i><br/>

<h3>Włączamy apache2 i sprawdzamy czy działa wchodząc na lokalny adres IP malinki<br/></h3>
<i>sudo service apache2 start</i><br/>

<h3>Nobieramy i nstalujemy program ze strony no-ip.com<br/></h3>

<i>sudo bash<br/>
cd /usr/local/src/<br/>
wget http://www.no-ip.com/client/linux/noip-duc-linux.tar.gz <br/>
tar xf noip-duc-linux.tar.gz<br/>
cd noip-2.1.9-1/<br/>
make install</i><br/>

<h3>Dopisujemy linię w pliku rc.local, by ustawić program na autostart systemu<br/></h3>

<i>sudo nano /etc/rc.local</i><br/>

<h3>Na samym dole, zaraz przed</h3><i>"exit 0"</i> <h3>trzeba dodać linię:</h3> <i>/usr/local/bin/noip2</i><br/><br/>
<h3>Dziękuję za skorzystanie! W razie błędów proszę o skontaktowanie się ze mną</h3>


</p>
</article>
<!------------------------------------------------Content------------------------------------------->
	</div>
</main>
<?php include("stopka.html");?>
<script src="sticky.js"></script>
</body>
</html>