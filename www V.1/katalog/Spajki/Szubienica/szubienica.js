var haslo="Bez pracy nie ma kołaczy";
haslo=haslo.toUpperCase();
var dlugosc=haslo.length;

var ileskuch=0;

var haslo1="";

var yes=new Audio("pliki/yes.wav")
var no=new Audio("pliki/no.wav")

for(i=0;i<dlugosc;i++)
{
	if(haslo.charAt(i)==" ")haslo1=haslo1+" ";
	else haslo1=haslo1+"-";
}

function wypiszhaslo()
{
	document.getElementById("plansza").innerHTML=haslo1;
	
}

function start()
{

	var trescdiva="";
	
	for(i=0;i<=34;i++)
	{
		var element="lit"+i;
		trescdiva=trescdiva+'<div class="litera" onclick="sprawdz('+i+')" id="'+element+'">'+litery[i]+'</div>';
		if((i+1)%7==0)trescdiva=trescdiva+'<div style="clear:both;"></div>';
	}
	
	document.getElementById("alfabet").innerHTML=trescdiva;
	
	
	wypiszhaslo()
}

String.prototype.ustawznak=function(miejsce, znak)
{
	if(miejsce>this.length-1) return this.toString();
	else return this.substr(0, miejsce)+znak+this.substr(miejsce+1);
}

function sprawdz(nr)
{
	var trafiona=false;
	
	for(i=0;i<dlugosc;i++)
	{
		if(haslo.charAt(i)==litery[nr])
		{
			haslo1=haslo1.ustawznak(i,litery[nr]);
			trafiona=true;
		}
	}
	
	if(trafiona==true)
	{
		var element="lit"+nr;
		yes.play();
		document.getElementById(element).style.background="#003300";
		document.getElementById(element).style.color="#00C000";
		document.getElementById(element).style.cursor="default";
		document.getElementById(element).style.border="3px solid #00C000";
		wypiszhaslo();
	}
	else
	{
		var element="lit"+nr;
		no.play();
		document.getElementById(element).style.background="#330000";
		document.getElementById(element).style.color="#C00000";
		document.getElementById(element).style.cursor="default";
		document.getElementById(element).style.border="3px solid #C00000";
		document.getElementById(element).setAttribute("onclick",",")
		
		ileskuch++;
		var obraz="pliki/s"+ileskuch+".jpg";
		document.getElementById("szubienica").innerHTML='<img src="'+obraz+'" alt=""/>'
	}
	
	if(haslo==haslo1)
		document.getElementById("alfabet").innerHTML="Tak jest! Prawidłowe hasło: <br/>"+haslo+'<br/><br/><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
	
	if(ileskuch>=9)
		document.getElementById("alfabet").innerHTML="Przegrana! Prawidłowe hasło: <br/>"+haslo+'<br/><br/><span class="reset" onclick="location.reload()">JESZCZE RAZ?</span>';
}


window.onload=start;

var litery=new Array(35);
litery[0]="A";
litery[1]="Ą";
litery[2]="B";
litery[3]="C";
litery[4]="Ć";
litery[5]="D";
litery[6]="E";
litery[7]="Ę";
litery[8]="F";
litery[9]="G";
litery[10]="H";
litery[11]="I";
litery[12]="J";
litery[13]="K";
litery[14]="L";
litery[15]="Ł";
litery[16]="M";
litery[17]="N";
litery[18]="Ń";
litery[19]="O";
litery[20]="Ó";
litery[21]="P";
litery[22]="Q";
litery[23]="R";
litery[24]="S";
litery[25]="Ś";
litery[26]="T";
litery[27]="U";
litery[28]="W";
litery[29]="V";
litery[30]="X";
litery[31]="Y";
litery[32]="Z";
litery[33]="Ż";
litery[34]="Ź";
