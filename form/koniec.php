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
<center><img src="logo.png"/></center><br /><br /><br />


<?php



$xk = $_GET['x']; 
$yk = $_GET['y'];

if($xk == 5 and $yk == 6) echo "WYGRA£ES";

echo '<form action="ranking.php">';
 echo '<input type="submit" value="Ranking">';
echo '</form>';

?>

</body>
</html>