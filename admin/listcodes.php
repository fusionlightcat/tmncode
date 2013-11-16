<?php
require_once ('./config.php');
$db_link = mysql_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );
 
$sql = "SELECT * FROM codes";
 
$db_erg = mysql_query( $db_link, $sql );
if ( ! $db_erg )
{
  die('Ungültige Abfrage: ' . mysql_error());
}
 
echo '<table border="1">';
while ($zeile = mysql_fetch_array( $db_erg, MYSQL_ASSOC))
{
  echo "<tr>";
  echo "<td>". $zeile['time'] . "</td>";
  echo "<td>". $zeile['codes'] . "</td>";
  echo "</tr>";
}
echo "</table>";
 
mysql_free_result( $db_erg );
?>