
<?php

error_reporting(0); 
$sqliteerrormsg = "eine fehlermeldung!"; 
$db = sqlite_open('db.sqlite'); 
if ($_GET['erstellen']=='true') 
{ 
$db1 = sqlite_open('db.sqlite', 0666, $sqliteerror); 
sqlite_query($db, "CREATE TABLE telefonbuch (id INTEGER PRIMARY KEY, code, time)"; 
sqlite_close($db); 
$schritt1 = false; 
echo "<h1>Erstellen der SQLite - Datenbank...</h1>"; 
if (sqlite_open('telefonbuch.sqlite', '0666', $sqliteschitt)) 
{ 
$schritt1 = true; 
echo "Na bitte! Die Datenbank wurde erfolgreich eingerichtet :-)"; 
} 
else 
{ 
echo "<br \><br \>Datenbank konnte leider <b>nicht</b> erfolgreich eingerichtet werden :'-(<br>Existiert sie vielleicht nicht schon ^.~"; 
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