<?php 
$sqliteerrormsg = "eine fehlermeldung!"; 
$db = sqlite_open('../sql/db.sqlite'); 
if ('0'=='0') 
{ 
$db1 = sqlite_open('../sql/db.sqlite', 0666, $sqliteerror); 
sqlite_query($db, "CREATE TABLE codes (id INTEGER PRIMARY KEY, code, time)"); 
sqlite_close($db); 
$schritt1 = false; 
echo "<h1>Erstellen der SQLite - Datenbank...</h1>"; 
if (sqlite_open('db.sqlite', '0666', $sqliteerrormsg)) 
{ 
$schritt1 = true; 
echo "Die Datenbank wurde erfolgreich eingerichtet!"; 
} 
else 
{ 
echo "<br \><br \>Datenbank konnte leider <b>nicht</b> erfolgreich eingerichtet werden!"; 
}
}
?>			