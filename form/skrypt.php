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
<form action="ranking.php" method="get">
    <link rel='stylesheet' type='text/css' href='2.css'>

    <?php
	
    echo '<div align="center" id="s">';
    echo '<img src="logo2.png" />';
    echo "</div>";

    echo '<div align="center">';


    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = $_GET["z"];
	
		$imie =	$_POST['imie'];
		$nazwisko = $_POST['nazwisko'];
		$plec =	$_POST['sex'];
		$klasa = $_POST['class'];

    $rand1 = rand(1,4);
    $rand2 = rand(1,4);


    echo '<table align="center">';
    echo "<tr>";
    echo "</tr>";
    for($i=1; $i<5; $i++) {
        echo "<tr>";


        for($j = 1; $j<5; $j++) {
            echo "<td>";
            $nazwa = "mapa/puste.png";

            $skarb_x1 = $rand1;
            $skarb_y1 = $rand2;
			

            if($i == $y and $j == $x) {
                $nazwa = "mapa/hero.png";
                if(($x == $skarb_x1 and $y == $skarb_y1)) {

				
                }
            }
            echo "<img src=\"$nazwa\" />";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // strza�ka w lewo
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = ($_GET["z"]);

	
    $nowex = $x-1; $nowey = $y; $nowez= $z+1; // ruch w lewo - maleje $x
    if (($x=="2" or $x=="3" or $x=="4") and !($x==$skarb_x1 and $y==$skarb_y1 )) {
        echo "<A HREF=\"skrypt.php?x=$nowex&y=$nowey&z=$nowez\">";
        echo "<img border=\"0\" src=\"mapa/arrow_l.png\" />";
        echo "</A>";
		
    }
    else
        echo "<img src=\"mapa/arrow_l.png\" />";
	

    // strza�ka w prawo



    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = ($_GET["z"]);
	

    $nowex = $x+1; $nowey = $y;  $nowez= $z+1;// ruch w prawo - ro�nie $x
    if (($x=="1" or $x=="2" or $x=="3")and !($x==$skarb_x1 and $y==$skarb_y1 )) {
        echo "<A HREF=\"skrypt.php?x=$nowex&y=$nowey&z=$nowez\">";
        echo "<img border=\"0\" src=\"mapa/arrow_r.png\" />";
        echo "</A>";
		
    }
    else
        echo "<img src=\"mapa/arrow_r.png\" />";






    // strza�ka do g�ry
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = ($_GET["z"]);
	
    $nowex = $x; $nowey = $y-1; $nowez= $z+1; // ruch w g�r� - maleje $y
    if (($y=="2" or $y=="3" or $y=="4")and !($x==$skarb_x1 and $y==$skarb_y1 )) {
        echo "<A HREF=\"skrypt.php?x=$nowex&y=$nowey&z=$nowez\">";
        echo "<img border=\"0\" src=\"mapa/arrow_u.png\" />";
        echo "</A>";
		
    }
    else
        echo "<img src=\"mapa/arrow_u.png\" />";


    // strza�ka do dolu
    $x = $_GET['x'];
    $y = $_GET['y'];
    $z = ($_GET["z"]);
	
    $nowex = $x; $nowey = $y+1; $nowez= $z+1; // ruch w g�r� - ro�nie $y
    if (($y=="1" or $y=="2" or $y=="3")and !($x==$skarb_x1 and $y==$skarb_y1 )) {
        echo "<A HREF=\"skrypt.php?x=$nowex&y=$nowey&z=$nowez\">";
        echo "<img border=\"0\" src=\"mapa/arrow_d.png\" />";
        echo "</A>";
		
    }
    else
        echo "<img src=\"mapa/arrow_d.png\" />";
	

    $pkt=$z;
    if(($x==$skarb_x1 and $y==$skarb_y1 )) {
		$link = mysql_connect('localhost', 'wojmos', 'wojmos09') or die('Nie udało się połączyć');
		mysql_select_db('wojmos') or die('Nie udało się połączyć');
		
		session_start();
		$imie =	$_SESSION['imie'];
		$nazwisko = $_SESSION['nazwisko'];
		$plec =	$_SESSION['sex'];
		$klasa = $_SESSION['class'];

		$sql = "insert into ranking values('$imie','$nazwisko','$plec','$klasa',$pkt)";
		$result1 = mysql_query($sql);
		
        echo "<k2><br><br>Udało Ci się odnaleźć zaginiony skarb Atorii!</k2><br /><br />";
        echo "<k>Wykorzystana liczba ruchów:</k><k2> $z</k2><br />";
        echo "<k>Zapisz swój wynik w rankingu i porównaj go z innymi graczami</k><br /><br />";
        echo '<form action="ranking.php">';
        echo '<center><button class="button" type="submit" value="Submit" name="submit" style="vertical-align:middle"><span>Ranking</span></button></center>';
        echo "</form>";
        echo "</div>";
    }
    else {
	
        echo '<k><br><br>Szukaj ukrytego skarbu klikając na strzałki</k>';
        echo "<k><br><br>$z</k>";
        echo "</div>";
    }
    echo '<div align="center">';

    ?>

</body>
</html>