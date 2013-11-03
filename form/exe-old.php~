
<?php
$mysqlhost="localhost"; // MySQL-Host angeben

$mysqluser="root"; // MySQL-User angeben

$mysqlpwd="aaa"; // Passwort angeben

$mysqldb="tmonySQL"; // Gewuenschte Datenbank angeben

 

mysql_connect($mysqlhost, $mysqluser, $mysqlpwd) or die ("Verbindungsversuch fehlgeschlagen");
$db = "tmonySQL";
mysql_select_db($db);


$select = "Select * from codes";
$result = mysql_query($select);
if($result){
 echo "<table>";
 while($row = mysql_fetch_array($result)){
  echo "<tr><td>Vorname</td><td>:</td><td>".$row['time']."</td></tr>";
  echo "<tr><td>Nachname</td><td>:</td><td>".$row['code']."</td></tr>";
  echo "<tr><td>Strasse</td><td>:</td><td>".$row['Strasse']."</td></tr>";
  echo "<tr><td>Postleitzahl</td><td>:</td><td>".$row['PLZ']."</td></tr>";
  echo "<tr><td>Ort</td><td>:</td><td>".$row['Ort']."</td></tr>";
 }
 echo "</table>";
}
echo "Anzahl der Datensätze: $anzahl";
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
		<form id="form_719091" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Code Eingabe</h2>
			<p>Bitte den Code auf dem Zettel eingeben!
</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Code </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="719091" />
			    
				<input id="saveForm" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			Powered by <a href="../index.php">TMNCode</a> 2013 by Arthur Schüler
		</div>
	</div>
	<img id="bottom" src="../jpg/bottom.png" alt="">
	</body>
</html>