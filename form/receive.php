<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="fav.ico" sizes="16x16" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Atoria</title>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="2.css" type="text/css" rel="stylesheet" />
</head>

<body>
<link rel='stylesheet' type='text/css' href='2.css'>

<?php
session_start();
$_SESSION['imie'] = $_POST['imie'];
$_SESSION['nazwisko'] = $_POST['nazwisko'];
$_SESSION['sex'] = $_POST['sex'];
$_SESSION['class'] = $_POST['class'];
		
if(isset($_POST['imie'])) $imie = $_POST['imie']; else $imie = 'Unnamed';

if(isset($_POST['nazwisko'])) $nazwisko = $_POST['nazwisko']; else $nazwisko = 'Unnamed';

if(isset($_POST['sex'])) $plec = $_POST['sex']; else $plec = 'Unnamed';

if(isset($_POST['class'])) $klasa = $_POST['class']; else $klasa = 'Unnamed';

echo '<center><img src="logo.png"/></center><br /><br /><br />';

echo '<div id="exCenter">';
    echo '<div id="exContent">';
        echo '<div id="exLeftColumn">';
            if($klasa == Pirat) {
                echo '<img src="fantasy/pirate.PNG" />';
            }
            else if($klasa == Wojownik) {
                echo '<img src="fantasy/knight.PNG" />';
            }
                else if($klasa == Druid) {
            echo '<img src="fantasy/mag.png" />';
            }
        echo "</div>";
        echo '<div id="exRightColumn">';
        echo '<p>Imię: '; echo "<f2>"; echo $imie;
        echo '<p>Nazwisko: '; echo "<f2>"; echo $nazwisko;
        
        if($plec == Mężczyzna) {
        	echo "<p>Płeć: "; echo "<f2>"; echo $plec;
        }
        else if($plec == Kobieta) {
	       echo "<p>Płeć: "; echo "<f2>"; echo $plec;
        }

        if($klasa == Pirat) {
	       echo "<p>Klasa: "; echo "<f2>"; echo $klasa;
        }
        else if($klasa == Wojownik) {
        	echo "<p>Klasa: "; echo "<f2>"; echo $klasa;
        }
        else if($klasa == Druid) {
	       echo "<p>Klasa: "; echo "<f2>"; echo $klasa;
        }
        echo "</div>";
        echo '<div class="exClear"></div>';
    echo "</div>";

if($klasa == Pirat) {
$sila = rand(1, 7);
$obrona =  rand(2, 9);
$inteligencja = rand(4, 10);
}
else if($klasa == Wojownik) {
$sila = rand(2, 9);
$obrona = rand(1, 7);
$inteligencja = rand(2, 10);
}
else if($klasa == Druid) {
$sila = rand(2, 8);
$obrona = rand(1, 8);
$inteligencja = rand(4, 10);
}


echo '<div id="m1">';
    echo '<img src="fantasy/sword.png" />';
        echo '<div id="m2">';
            echo 'Siła: '; echo $sila;
        echo "</div>";
    echo '<img src="fantasy/shield.png" />';
        echo '<div id="m2">';
            echo 'Obrona: '; echo $obrona;
        echo "</div>";
    echo '<img src="fantasy/brain.png" />';
        echo '<div id="m2">';
            echo 'Spryt: '; echo $inteligencja;
        echo "</div>";
echo "</div>";

echo '<div id="m3">';
echo "<k>Twój współczynnik postaci wynosi: <br/>";
$suma = $sila + $obrona + $inteligencja;
$wspl = $suma / 3; 
$ws = ceil($wspl);
if($ws <= 3) {
 echo "<w1>"; echo $ws; echo "</w1>";   
}
else if($ws >= 4 && $wspl <= 7) {
 echo "<w2>"; echo $ws; echo "</w2>";   
}
else if($ws >= 8) {
 echo "<w3>"; echo $ws; echo "</w3>";   
}
echo "</div>";

echo '<form method="post" action="skrypt.php?x=1&y=1&z=0">';
        echo '<center><button class="button" type="submit" value="Submit" name="submit" style="vertical-align:middle"><span>Mapa</span></button></center>';
echo '</form>';
?>
</body>
</html>