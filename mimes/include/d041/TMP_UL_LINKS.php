
<?php 
srand((double)microtime()*1000000);
$start = rand(1,1633);
$rows = 25;
mysql_select_db($database_xxeo, $xxeo);

$query_Links = "SELECT `Keyword`, `Pfad` FROM `sites-abfrage` LIMIT $start, $rows;";
$Links = mysql_query($query_Links, $xxeo) or die(mysql_error());
$row_Links = mysql_fetch_assoc($Links);
?>

<ul>
	<?php do { ?>
	<span><a href="<?php echo $row_Links['Pfad']; ?>"><?php echo $row_Links['Keyword']; ?> |</a></span>
	<?php } while ($row_Links = mysql_fetch_assoc($Links)); ?>
</ul>
