
<?php
$mysqlhost="localhost"; // MySQL-Host angeben

$mysqluser="root"; // MySQL-User angeben

$mysqlpwd="aaa"; // Passwort angeben

$mysqldb="tmonySQL"; // Gewuenschte Datenbank angeben

$formcode = $_GET['element_1'];

mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die ("Verbindungsversuch fehlgeschlagen");
$db = "tmonySQL";
mysql_select_db($db);


$select = "Select * from codes";
$result = mysql_query($select);
if($result){
 while($row = mysql_fetch_array($result)){
	$time = $row['time'];
	$code = $row['code'];

	if($formcode == $code) {
		$ok = "OK";
		}
 }
}
?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Code Eingabe</title>
<link rel="stylesheet" type="text/css" href="../css/view.css" media="all">
<script type="text/javascript" src="../js/view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="../jpg/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Code Eingabe</a></h1>
					<div class="form_description">
			<h2>In Entwicklung...</h2>
			<p>ErgebnisCode: 
			<?php 
			echo $ok;
			?>
</p>
		</div>						
			<ul >
			
					<li id="li_1" >

		<div>

		</div> 
		</li>
			
					<li class="buttons">
		</li>
			</ul>
		<div id="footer">
			Powered by <a href="../index.php">TMNCode</a> 2013 by Arthur Schüler
		</div>
	</div>
	<img id="bottom" src="../jpg/bottom.png" alt="">
	</body>
</html>