<?php
mysql_select_db($database_xxeo, $xxeo);
$query_Allgemein = "SELECT `Pfad` FROM `sites-abfrage` WHERE SM LIKE '$SM'";
$Allgemein = mysql_query($query_Allgemein, $xxeo) or die(mysql_error());
$row_Allgemein = mysql_fetch_assoc($Allgemein);
$totalRows_Allgemein = mysql_num_rows($Allgemein);
?>
