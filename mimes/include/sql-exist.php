<?php
mysql_select_db($database_xxeo, $xxeo);
$query_DIVALL_EX = "SELECT 
`D011_EX` , `D011_ROW` , `D011_TAB` , `D011_GRP` , `D011_TMP` , `D012_EX` , `D012_ROW` , `D012_TAB` , `D012_GRP` , `D012_TMP` , `D013_EX` , `D013_ROW` , `D013_TAB` , `D013_GRP` , `D013_TMP` ,
`D021_EX` , `D021_ROW` , `D021_TAB` , `D021_GRP` , `D021_TMP` , `D022_EX` , `D022_ROW` , `D022_TAB` , `D022_GRP` , `D022_TMP` , `D023_EX` , `D023_ROW` , `D023_TAB` , `D023_GRP` , `D023_TMP` ,
`D031_EX` , `D031_ROW` , `D031_TAB` , `D031_GRP` , `D031_TMP` , `D032_EX` , `D032_ROW` , `D032_TAB` , `D032_GRP` , `D032_TMP` , `D033_EX` , `D033_ROW` , `D033_TAB` , `D033_GRP` , `D033_TMP` ,
`D041_EX` , `D041_ROW` , `D041_TAB` , `D041_GRP` , `D041_TMP` , `D042_EX` , `D042_ROW` , `D042_TAB` , `D042_GRP` , `D042_TMP` , `D043_EX` , `D043_ROW` , `D043_TAB` , `D043_GRP` , `D043_TMP` ,
`D051_EX` , `D051_ROW` , `D051_TAB` , `D051_GRP` , `D051_TMP` , `D052_EX` , `D052_ROW` , `D052_TAB` , `D052_GRP` , `D052_TMP` , `D053_EX` , `D053_ROW` , `D053_TAB` , `D053_GRP` , `D053_TMP` ,
`D061_EX` , `D061_ROW` , `D061_TAB` , `D061_GRP` , `D061_TMP` , `D062_EX` , `D062_ROW` , `D062_TAB` , `D062_GRP` , `D062_TMP` , `D063_EX` , `D063_ROW` , `D063_TAB` , `D063_GRP` , `D063_TMP` ,
`D071_EX` , `D071_ROW` , `D071_TAB` , `D071_GRP` , `D071_TMP` , `D072_EX` , `D072_ROW` , `D072_TAB` , `D072_GRP` , `D072_TMP` , `D073_EX` , `D073_ROW` , `D073_TAB` , `D073_GRP` , `D073_TMP` ,
`D081_EX` , `D081_ROW` , `D081_TAB` , `D081_GRP` , `D081_TMP` , `D082_EX` , `D082_ROW` , `D082_TAB` , `D082_GRP` , `D082_TMP` , `D083_EX` , `D083_ROW` , `D083_TAB` , `D083_GRP` , `D083_TMP` , `D091_EX` , `D091_ROW` , `D091_TAB` , `D091_GRP` , `D091_TMP` , `D092_EX` , `D092_ROW` , `D092_TAB` , `D092_GRP` , `D092_TMP` , `D093_EX` , `D093_ROW` , `D093_TAB` , `D093_GRP` , `D093_TMP` ,
`D101_EX` , `D101_ROW` , `D101_TAB` , `D101_GRP` , `D101_TMP` , `D102_EX` , `D102_ROW` , `D102_TAB` , `D102_GRP` , `D102_TMP` , `D103_EX` , `D103_ROW` , `D103_TAB` , `D103_GRP` , `D103_TMP` ,
`D111_EX` , `D111_ROW` , `D111_TAB` , `D111_GRP` , `D111_TMP` , `D112_EX` , `D112_ROW` , `D112_TAB` , `D112_GRP` , `D112_TMP` , `D113_EX` , `D113_ROW` , `D113_TAB` , `D113_GRP` , `D113_TMP`
FROM `content` WHERE `Pfad` LIKE '$path'";
$DIVALL_EX = mysql_query($query_DIVALL_EX, $xxeo) or die(mysql_error());
$row_DIVALL_EX = mysql_fetch_assoc($DIVALL_EX);
$totalRows_DIVALL_EX = mysql_num_rows($DIVALL_EX);
?>
