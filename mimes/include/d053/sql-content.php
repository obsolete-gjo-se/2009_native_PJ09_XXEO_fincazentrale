<?php 
mysql_select_db($database_xxeo, $xxeo);
$query_D053_TMP = sprintf("SELECT `content`.`D053_TMP`
FROM `sites-abfrage` INNER JOIN `content` ON `sites-abfrage`.`Pfad` = `content`.`Pfad`
WHERE `sites-abfrage`.`Pfad` LIKE '$path';");
$D053_TMP = mysql_query($query_D053_TMP, $xxeo) or die(mysql_error());
$row_D053_TMP = mysql_fetch_assoc($D053_TMP);
$totalRows_D053_TMP = mysql_num_rows($D053_TMP);

mysql_select_db($database_xxeo, $xxeo);
$query_D053_ROW = "SELECT COUNT(`inhalt_komplett`.`Spalte1`) 
FROM (`inhalt_komplett` JOIN `content` ON (`inhalt_komplett`.`Gruppe` = `content`.`D053_GRP`) AND (`inhalt_komplett`.`Tabelle` = `content`.`D053_TAB`)) JOIN `sites-abfrage` ON `content`.`pfad` = `sites-abfrage`.`pfad` WHERE `sites-abfrage`.`Pfad` LIKE '$path'";
$D053_ROW = mysql_query($query_D053_ROW, $xxeo) or die(mysql_error());
$menge = mysql_fetch_row($D053_ROW);
$menge = $menge[0];

srand((double)microtime()*1000000);
$start = rand(1,$menge-$row_DIVALL_EX['D053_ROW']);
if ($start < 1) {$start =1;}
$rows = $row_DIVALL_EX['D053_ROW'];
mysql_select_db($database_xxeo, $xxeo);
$query_D053_Content = "SELECT `inhalt_komplett`.`Spalte1`, `inhalt_komplett`.`Spalte2`, `inhalt_komplett`.`Spalte3`, `inhalt_komplett`.`Spalte4`, `inhalt_komplett`.`Spalte5`, `inhalt_komplett`.`Spalte6`, `inhalt_komplett`.`Spalte7`, `inhalt_komplett`.`Spalte8` FROM (`inhalt_komplett` JOIN `content` ON (`inhalt_komplett`.`Gruppe` = `content`.`D053_GRP`) AND (`inhalt_komplett`.`Tabelle` = `content`.`D053_TAB`)) JOIN `sites-abfrage` ON `content`.`Pfad` = `sites-abfrage`.`pfad` WHERE `sites-abfrage`.`Pfad` LIKE '$path' LIMIT $start, $rows;";
$D053_Content = mysql_query($query_D053_Content, $xxeo) or die(mysql_error());
$row_D053_Content = mysql_fetch_assoc($D053_Content);
?>
