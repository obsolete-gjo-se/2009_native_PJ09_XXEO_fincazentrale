<?php
mysql_select_db($database_xxeo, $xxeo);
$query_Allgemein = "SELECT * FROM `sites-abfrage` WHERE Pfad LIKE '$path'";
$Allgemein = mysql_query($query_Allgemein, $xxeo) or die(mysql_error());
$row_Allgemein = mysql_fetch_assoc($Allgemein);
$totalRows_Allgemein = mysql_num_rows($Allgemein);
?>
