<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Manuelle Zeit einstellen</title>
<link rel="stylesheet" type="text/css" href="../css/view.css" media="all">
<script type="text/javascript" src="../js/view.js"></script>

<style type="text/css">
.link {
	-moz-box-shadow:inset 0px 1px 0px 0px #c1ed9c;
	-webkit-box-shadow:inset 0px 1px 0px 0px #c1ed9c;
	box-shadow:inset 0px 1px 0px 0px #c1ed9c;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #9dce2c), color-stop(1, #8cb82b) );
	background:-moz-linear-gradient( center top, #9dce2c 5%, #8cb82b 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#9dce2c', endColorstr='#8cb82b');
	background-color:#9dce2c;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #83c41a;
	display:inline-block;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:37px;
	line-height:37px;
	width:164px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #689324;
}
.link:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #8cb82b), color-stop(1, #9dce2c) );
	background:-moz-linear-gradient( center top, #8cb82b 5%, #9dce2c 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#8cb82b', endColorstr='#9dce2c');
	background-color:#8cb82b;
}.link:active {
	position:relative;
	top:1px;
}</style>

</head>
<body id="main_body" >
	
	<img id="top" src="../jpg/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Zeit eingeben</a></h1>
		<form id="form_719091" class="appnitro" name="form1" method="post">
					<div class="form_description">
			<h2>Zeit eingeben</h2>
			<p>Bitte in Minuten angeben!
</p>


<?php

if (!empty($_POST)) {


$ist = file_get_contents("./ist.db");
$ist = str_replace("\n", "", $ist);

$aist = $ist*5;

$soll = $_POST['chnum'];        #ok

if ($soll != 0) {
$soll = str_replace("\n", "", $soll);
$time = $soll/5;
	// Festlegen des Dateinamens
	$datei_name = "./soll.db";
	
	/* 
	Die Datei wird zum schreiben geoeffnet
	und falls der Dateiname bereits vorhanden ist,
	wird der komplette alte Inhalt vorher geloescht!
	*/
	$fp = fopen($datei_name, "w");

	/*
	 Daten in Datei schreiben.
	Dieser Befehl kann widerholt aufgerufen werden.
	*/
	fwrite($fp, $time);

	// Die Datei wird geschlossen.
	fclose($fp);
} else {

$soll = file_get_contents("./soll.db");
$soll = str_replace("\n", "", $soll);
$soll = $soll*5;

}
//print "ist" . $ist . "<br>";
//print "soll" . $time . "<br>";
print "Nutzungszeit aktuell noch: " . $aist . " Minuten<br>"
 . "nach der nächsten Aktualisierung:" . ($aist+$soll) . " Minuten<br>";

}
?>
	</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Zeitverlängerung</label>
		<div>
			<input id="chnum" name="chnum" class="element text medium" type="text" maxlength="255" value="0"/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="719091" />
			    
				<a onclick="document.form1.submit()" class="link">OK</a> <a href="./index.php" class="link">Zurück</a>
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
