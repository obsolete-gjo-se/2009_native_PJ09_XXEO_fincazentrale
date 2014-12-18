<?php 
mysql_select_db($database_xxeo, $xxeo);
$query_D071_TMP = sprintf("SELECT `content`.`D071_TMP`
FROM `sites-abfrage` INNER JOIN `content` ON `sites-abfrage`.`Pfad` = `content`.`Pfad`
WHERE `sites-abfrage`.`Pfad` LIKE '$path';");
$D071_TMP = mysql_query($query_D071_TMP, $xxeo) or die(mysql_error());
$row_D071_TMP = mysql_fetch_assoc($D071_TMP);
$totalRows_D071_TMP = mysql_num_rows($D071_TMP);

mysql_select_db($database_xxeo, $xxeo);
$query_D071_ROW = "SELECT COUNT(`inhalt_komplett`.`Spalte1`) 
FROM (`inhalt_komplett` JOIN `content` ON (`inhalt_komplett`.`Gruppe` = `content`.`D071_GRP`) AND (`inhalt_komplett`.`Tabelle` = `content`.`D071_TAB`)) JOIN `sites-abfrage` ON `content`.`pfad` = `sites-abfrage`.`pfad` WHERE `sites-abfrage`.`Pfad` LIKE '$path'";
$D071_ROW = mysql_query($query_D071_ROW, $xxeo) or die(mysql_error());
$menge = mysql_fetch_row($D071_ROW);
$menge = $menge[0];

srand((double)microtime()*1000000);
$start = rand(1,$menge-$row_DIVALL_EX['D071_ROW']);
if ($start < 1) {$start =1;}
$rows = $row_DIVALL_EX['D071_ROW'];
mysql_select_db($database_xxeo, $xxeo);
$query_D071_Content = "SELECT `inhalt_komplett`.`Spalte1`, `inhalt_komplett`.`Spalte2`, `inhalt_komplett`.`Spalte3`, `inhalt_komplett`.`Spalte4`, `inhalt_komplett`.`Spalte5`, `inhalt_komplett`.`Spalte6`, `inhalt_komplett`.`Spalte7`, `inhalt_komplett`.`Spalte8` FROM (`inhalt_komplett` JOIN `content` ON (`inhalt_komplett`.`Gruppe` = `content`.`D071_GRP`) AND (`inhalt_komplett`.`Tabelle` = `content`.`D071_TAB`)) JOIN `sites-abfrage` ON `content`.`Pfad` = `sites-abfrage`.`pfad` WHERE `sites-abfrage`.`Pfad` LIKE '$path' LIMIT $start, $rows;";
$D071_Content = mysql_query($query_D071_Content, $xxeo) or die(mysql_error());
$row_D071_Content = mysql_fetch_assoc($D071_Content);
?>
