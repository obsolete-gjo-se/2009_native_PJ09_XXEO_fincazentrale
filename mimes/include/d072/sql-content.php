<?php 
mysql_select_db($database_xxeo, $xxeo);
$query_D072_TMP = sprintf("SELECT `content`.`D072_TMP`
FROM `sites-abfrage` INNER JOIN `content` ON `sites-abfrage`.`Pfad` = `content`.`Pfad`
WHERE `sites-abfrage`.`Pfad` LIKE '$path';");
$D072_TMP = mysql_query($query_D072_TMP, $xxeo) or die(mysql_error());
$row_D072_TMP = mysql_fetch_assoc($D072_TMP);
$totalRows_D072_TMP = mysql_num_rows($D072_TMP);

mysql_select_db($database_xxeo, $xxeo);
$query_D072_ROW = "SELECT COUNT(`inhalt_komplett`.`Spalte1`) 
FROM (`inhalt_komplett` JOIN `content` ON (`inhalt_komplett`.`Gruppe` = `content`.`D072_GRP`) AND (`inhalt_komplett`.`Tabelle` = `content`.`D072_TAB`)) JOIN `sites-abfrage` ON `content`.`pfad` = `sites-abfrage`.`pfad` WHERE `sites-abfrage`.`Pfad` LIKE '$path'";
$D072_ROW = mysql_query($query_D072_ROW, $xxeo) or die(mysql_error());
$menge = mysql_fetch_row($D072_ROW);
$menge = $menge[0];

srand((double)microtime()*1000000);
$start = rand(1,$menge-$row_DIVALL_EX['D072_ROW']);
if ($start < 1) {$start =1;}
$rows = $row_DIVALL_EX['D072_ROW'];
mysql_select_db($database_xxeo, $xxeo);
$query_D072_Content = "SELECT `inhalt_komplett`.`Spalte1`, `inhalt_komplett`.`Spalte2`, `inhalt_komplett`.`Spalte3`, `inhalt_komplett`.`Spalte4`, `inhalt_komplett`.`Spalte5`, `inhalt_komplett`.`Spalte6`, `inhalt_komplett`.`Spalte7`, `inhalt_komplett`.`Spalte8` FROM (`inhalt_komplett` JOIN `content` ON (`inhalt_komplett`.`Gruppe` = `content`.`D072_GRP`) AND (`inhalt_komplett`.`Tabelle` = `content`.`D072_TAB`)) JOIN `sites-abfrage` ON `content`.`Pfad` = `sites-abfrage`.`pfad` WHERE `sites-abfrage`.`Pfad` LIKE '$path' LIMIT $start, $rows;";
$D072_Content = mysql_query($query_D072_Content, $xxeo) or die(mysql_error());
$row_D072_Content = mysql_fetch_assoc($D072_Content);
?>
